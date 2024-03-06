<?php

class Admin_Controller_User extends Core_Controller_Admin_Action
{
    protected $_allowedActions = array('login');

    protected $_userName = 'abcabc@gmail.com';

    protected $_password = 'npmi';

    public function loginAction()
    {
    
        if (isset($_POST["submit"])) {
            $data = $this->getRequest()->getParams("login");
            if ($data["customer_email"] == $this->_userName) {
                if ($data["password"] == $this->_password) {
                    $customerId = 1;
                    Mage::getSingleton("core/session")->set("logged_in_admin_user_id", $customerId);

                    $this->setRedirect("admin/user/dashboard");
                } else {
                    $this->setRedirect("admin/user/login");
                }
            }
        
            else {
                echo "Please Enter valid Username & Password!";
                $this->setRedirect("admin/user/login");
            }

        } else {
            $layout = $this->getLayout();
            $layout->removeChild('header')->removeChild('footer');
            $child = $layout->getChild('content');
            $layout->getChild('head')->addCss('form.css');
            $login = $layout->createBlock('customer/login')->setTemplate('admin/login.phtml');
            $child->addChild('login', $login);
            $layout->toHtml();
        }
    }

    public function dashboardAction()
    {
        $sessionId = Mage::getSingleton("core/session")->get("logged_in_admin_user_id");
        if ($sessionId) {
            $this->setFormCss('dashboard');
            $layout = $this->getLayout();
            $child = $layout->getChild('content');
            $login = $layout->createBlock('admin/dashboard');
            $child->addChild('login', $login);
            $layout->toHtml();
        }
    }

    
}