<?php

use Hugofirth\Mailchimp\Facades\MailchimpWrapper;

class ListController extends Controller {
    
    public function subscribe() {     
        $temp = MailchimpWrapper::lists()->getList();
        
        $listid = $temp['data'][0]['id'];
        MailchimpWrapper::lists()->subscribe($listid,array('email'=>Input::get('email')));
    }
}