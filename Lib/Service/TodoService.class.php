<?php

/**
 * Description of TodoService
 *
 * @author Richard Lea <chigix@zoho.com>
 */
class TodoService extends ChigiService {

    public $apiAction = "Sugar.Action.SugarApi";

    public function onRead($data) {
        return chigi_retas(231, "Successfully test", ching('TodoItems'));
    }

    public function onCreate($data) {
        $id = count(ching('TodoItems')) + 1;
        $data['id'] = $id;
        ching("TodoItems.$id", $data);
        return chigi_reta(231, "Successfully Add", $data);
    }

    public function onUpdate($data) {
        $id = $this->bind('rest_id');
        ching("TodoItems.$id", $data);
        return chigi_reta(231, 'Successfully Update', $data);
    }

    public function onDelete($data) {
        $id = $this->bind('rest_id');
        ching("TodoItems.$id", null);
        return chigi_reta(251, 'Successfully Deleted');
    }

}

?>
