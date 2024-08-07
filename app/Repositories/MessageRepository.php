<?php

namespace App\Repositories;

use App\Interfaces\MessageInterface;
use App\Models\Message;

class MessageRepository implements MessageInterface
{
    private $message;

    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    public function getAll()
    {
        return $this->message->all();
    }

    public function getById($id)
    {
        return $this->message->find($id);
    }

    public function store($data)
    {
        return $this->message->create($data);
    }

    public function update($id, $data)
    {
        return $this->message->find($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->message->find($id)->delete();
    }
}
