<?php
//Dataholderis
namespace App\Participants;

class Participant {

    private $data = [];

    public function __construct($data = null) {
        if ($data) {
            $this->setData($data);
        } else {
            $this->data = [
                'id' => null,
                'name' => null,
                'comment' => null,
//                'time' => date('Y/m/d H:i:s')
            ];
        }
    }

    /**
     * * Sets all data from array
     * @param $array
     */
    public function setData($array) {
        if (isset($array['id'])) {
            $this->setId($array['id']);
        } else {
            $this->data['id'] = null;
        }
        $this->setName($array['name'] ?? null);
        $this->setComment($array['comment'] ?? null);
//        $this->setTime($array['time'] ?? null);
    }

    /**
     * Gets all data as array
     * @return array
     */
    public function getData() {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'comment' => $this->getComment(),
//            'time' => $this->getTime(),
        ];
    }

    /**
     * @param int $id
     */
    public function setId(int $id) {
        $this->data['id'] = $id;
    }

    /**
     * @return int|null
     */
    public function getId() {
        return $this->data['id'];
    }

    /**
     * Sets name
     * @param string $name
     */
    public function setName(string $name) {
        $this->data['name'] = $name;
    }

    /**
     * Returns name
     * @return string
     */
    public function getName() {
        return $this->data['name'];
    }

    /**
     * Sets data comment
     * @param string $comment
     */
    public function setComment(string $comment) {
        $this->data['comment'] = $comment;
    }

    /**
     * @return mixed
     */
    public function getComment() {
        return $this->data['comment'];
    }
    
    /**
     * Sets time
     * @param string $time
     */
//    public function setTime(){
//        $this->data['time'] = $time;
//    }
    
    /**
     * Returns time
     * @return string
     */
//    public function getTime(string $time){
//        return $this->data['time'];
//    }

}
