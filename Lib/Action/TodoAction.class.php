<?php

/**
 * Todos 实例【供Backbone】
 *
 * @author Richard Lea <chigix@zoho.com>
 */
class TodoAction extends ChigiAction {

    public function index() {
        $this->display('index');
    }

    protected $todo = array(
        'CREATE' => array('Todo', 'onCreate'),
        'UPDATE' => array('Todo', 'onUpdate'),
        'READ' => array('Todo', 'onRead'),
        'DELETE' => array('Todo', 'onDelete'),
    );

}

?>
