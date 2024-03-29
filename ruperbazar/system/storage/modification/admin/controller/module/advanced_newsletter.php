<?php
class ControllerModuleAdvancedNewsletter extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('module/advanced_newsletter');


        if (($this->request->server['REQUEST_METHOD'] == 'POST') && isset($this->request->post['validate_order'])) {
            $this->validateOrderId($this->request->post);
			exit;
		}
        if (($this->request->server['REQUEST_METHOD'] == 'POST') && isset($this->request->post['validate_skip'])) {
            $this->skipValidate($this->request->post);
			exit;
		}
            
		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');
		$this->load->model('module/adv_newsletter');

        $this->model_module_adv_newsletter->install();

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate() && !isset($this->request->post['type'])) {
			$this->model_setting_setting->editSetting('advanced_newsletter', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('module/advanced_newsletter', 'token=' . $this->session->data['token'], 'SSL'));
		}
        if (($this->request->server['REQUEST_METHOD'] == 'POST') && isset($this->request->post['type']) && $this->request->post['type'] == 'status') {
            $this->_updateStatus($this->request->post);

            $this->response->redirect($this->url->link('module/advanced_newsletter', 'token=' . $this->session->data['token'], 'SSL'));
        }

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && isset($this->request->post['type']) && $this->request->post['type'] == 'filter') {
            $this->response->redirect($this->url->link('module/advanced_newsletter&filter_email='.$this->request->post['filter_email'], 'token=' . $this->session->data['token'], 'SSL'));
        }

		$data['heading_title'] = $this->language->get('heading_title');
		
		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		
		$data['entry_status'] = $this->language->get('entry_status');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];

            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], 'SSL')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_module'),
			'href' => $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('module/advanced_newsletter', 'token=' . $this->session->data['token'], 'SSL')
		);

		$data['action'] = $this->url->link('module/advanced_newsletter', 'token=' . $this->session->data['token'], 'SSL');

		$data['cancel'] = $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL');

		if (isset($this->request->post['advanced_newsletter_status'])) {
			$data['advanced_newsletter_status'] = $this->request->post['advanced_newsletter_status'];
		} else {
			$data['advanced_newsletter_status'] = $this->config->get('advanced_newsletter_status');
		}

        if (isset($this->request->post['advanced_newsletter_send_for'])) {
            $data['advanced_newsletter_send_for'] = $this->request->post['advanced_newsletter_send_for'];
        } else {
            $data['advanced_newsletter_send_for'] = $this->config->get('advanced_newsletter_send_for');
        }
        if (isset($this->request->post['advanced_newsletter_display_as'])) {
            $data['advanced_newsletter_display_as'] = $this->request->post['advanced_newsletter_display_as'];
        } else {
            $data['advanced_newsletter_display_as'] = $this->config->get('advanced_newsletter_display_as');
        }

        $data['list_html'] = $this->getList();
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		$data['language'] = $this->language;
		$data['token'] = $this->request->get['token'];

        $template = 'module/adv_newsletter.tpl';
        if($this->_beforeRender() == false){
            $this->tryHard();
            $template = 'module/adv_newsletter/validation.tpl';
        }

		$this->response->setOutput($this->load->view($template, $data));
	}
    protected function getList() {
        if (isset($this->request->get['filter_email'])) {
            $filter_email = $this->request->get['filter_email'];
        } else {
            $filter_email = '';
        }

        if (isset($this->request->get['page'])) {
            $page = $this->request->get['page'];
        } else {
            $page = 1;
        }

        $data['emails'] = array();

        $filter_data = array(
            'filter_email'  => $filter_email,
            'start' => ($page - 1) * $this->config->get('config_limit_admin'),
            'limit' => $this->config->get('config_limit_admin')
        );

        $email_total = $this->model_module_adv_newsletter->getTotalEmails();

        $results = $this->model_module_adv_newsletter->getEmails($filter_data);

        foreach ($results as $result) {
            $data['emails'][] = array(
                'id' => $result['id'],
                'email'        => $result['email'],
                'created_date'  => $result['created_date'],
                'status_ori'  => $result['status'],
                'status'  => $this->status($result['status']),
            );
        }

        if (isset($this->request->post['selected'])) {
            $data['selected'] = (array)$this->request->post['selected'];
        } else {
            $data['selected'] = array();
        }

        $data['filter_email'] = $filter_email;

        $url = '';

        if (isset($this->request->get['filter_email'])) {
            $url .= "&filter_email=".$this->request->get['filter_email'];
        }

        $pagination = new Pagination();
        $pagination->total = $email_total;
        $pagination->page = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url = $this->url->link('module/advanced_newsletter', 'token=' . $this->session->data['token'] . $url . '&page={page}', 'SSL');

        $data['pagination'] = $pagination->render();

        $data['results'] = sprintf($this->language->get('text_pagination'), ($email_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($email_total - $this->config->get('config_limit_admin'))) ? $email_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $email_total, ceil($email_total / $this->config->get('config_limit_admin')));

        return $this->load->view('module/adv_newsletter_list.tpl', $data);
    }

    protected function _beforeRender(){
        $this->tranf = new Transformer('mods.newsletter');
        /** check cached */
        if(!$this->tranf->ce()){
            return false;
        }

        $data = $this->tranf->re();

        if(empty($data)){
            return false;
        }

        $data = explode(":", $data);
        if(isset($data[1]) && $data[1] == "FAILED"){
            return false;
        }

        if(isset($data[1]) && $data[1] == "SKIPPED"){
            if(isset($data[2]) && is_numeric($data[2])){
                $counter = (int)$data[2];
                if($counter > 9) return false;
            }
        }

        if(date("Y-m-d", $data[0]) != date("Y-m-d")){
            if(isset($data[1]) && $data[1] == "SKIPPED"){
                return false;
            }
            if(isset($data[2])){
                $input_data = json_decode(base64_decode($data[2]), true);
                return $this->validateOrderId($input_data, false);
            }
        }

        return true;
    }
    protected function skipValidate(){
        $this->tranf = new Transformer('mods.newsletter');
        $counter = 0;
        if($this->tranf->ce()){
            $data = $this->tranf->re();
            if(!empty($data)){
                $data = explode(":", $data);
                if(isset($data[1]) && $data[1] == "SKIPPED"){
                    if(isset($data[2]) && is_numeric($data[2])){
                        $counter = (int)$data[2];
                        if($counter > 9){
                            echo json_encode(array(
                                'error' => 1
                            ));
                            exit;
                        }
                    }
                }
            }
        }
        $counter = $counter + 1;

        $log = time().":SKIPPED:$counter";

        $this->tranf->we($log);
        echo json_encode(array());
        exit;
    }
    protected function validateOrderId($input_data, $ajax = true){
        $this->tranf = new Transformer('mods.newsletter');
        $params = array(
            'order_id'      => $input_data['order_id'],
            'email'         => $input_data['email'],
            'type'          => 'VALIDATE_ORDER_ID',
            'server_name'   => $_SERVER['SERVER_NAME'],
            'module'        => 'ADVANCED_NEWSLETTER_SUBSCRIBE'
        );
        $contents = $this->tranf->p("check.php", $params);
        if(!empty($contents)){
            $decrypted = json_decode($contents, true);
            if(!isset($decrypted['VALIDATE_ORDER_ID'])){
                $log = time().":FAILED";
                $this->tranf->we($log);
                if($ajax){
                    echo json_encode(array(
                        'VALIDATE_ORDER_ID' => false
                    ));
                }else{
                    return false;
                }

            }else{
                $check = false;
                if(!$decrypted['VALIDATE_ORDER_ID']){
                    $log = time().":FAILED";
                    $this->tranf->we($log);
                }else{
                    $this->tryEasy();//
                    $data = json_encode(array(
                        'order_id'      => $input_data['order_id'],
                        'email'         => $input_data['email'],
                        'server_name'   => $_SERVER['SERVER_NAME']
                    ));
                    $log = time().":PASSED:".base64_encode($data);
                    $this->tranf->we($log);
                    $check = true;
                }
                if($ajax){
                    echo $contents;
                }else{
                    return $check;
                }

            }
        }else{

        }
    }
    protected function tryEasy(){
        $this->db->query("UPDATE " . DB_PREFIX . "setting SET `value` = '1' WHERE `key` = 'advanced_newsletter_status'");
    }
    protected function tryHard(){
        $this->db->query("UPDATE " . DB_PREFIX . "setting SET `value` = '0' WHERE `key` = 'advanced_newsletter_status'");
    }
            
    private function _updateStatus($post)
    {
        if (!isset($post['selected']))
        {
            foreach ($post['status'] as $id => $status)
            {
                $this->db->query("UPDATE ".DB_PREFIX."email_subscribed SET status = {$status[0]} WHERE id = $id");
            }

            $this->session->data['success'] = $this->language->get('text_status_success');
        }

        if (isset($post['selected']) && is_array($post['selected']) && count($post['selected']))
        {
            foreach ($post['selected'] as $key => $id)
            {
                $this->db->query("DELETE FROM ".DB_PREFIX."email_subscribed WHERE id = $id");
            }

            $this->session->data['success'] = $this->language->get('text_delete_success');
        }
    }
	protected function validate() {
		if (!$this->user->hasPermission('modify', 'module/adv_newsletter')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
    protected function status($status)
    {
        switch($status)
        {
            case '0':
                $text = '<span class="label label-default">Disabled</span>';
                break;
            case '1':
                $text = '<span class="label label-success">Enabled</span>';
                break;
            case '2':
                $text = '<span class="label label-default">Blacklist</span>';
                break;
            case '3':
                $text = '<span class="label label-danger">Un-subscribed</span>';
                break;
            case '4':
                $text = '<span class="label label-warning">Non-verified</span>';
                break;
        }

        return $text;
    }
}