<?php
namespace PrivateMessaging\Entity;

class MessageReceiver extends AbstractMessageEntity implements MessageReceiverInterface
{
    protected $messageId;
    protected $receiverId;
    protected $receivedOrNot = self::NOT_RECEIVED;
    protected $visible;

    /**
     * @return the $visible
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * @param field_type $visible
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;
    }

    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;
    }

    public function getMessageId()
    {
        return $this->messageId;
    }

    public function setReceiverId($receiverId)
    {
        $this->receiverId = $receiverId;
    }

    public function getReceiverId()
    {
        return $this->receiverId;
    }

    public function setReceivedOrNot($receivedOrNot)
    {
        $this->receivedOrNot = $receivedOrNot;
    }

    public function getReceivedOrNot()
    {
        return $this->receivedOrNot;
    }

    public function setReceived()
    {
        $this->setReceivedOrNot(static::RECEIVED);
    }

    public function isReceived()
    {
        return $this->getReceivedOrNot() === static::RECEIVED;
    }
}
