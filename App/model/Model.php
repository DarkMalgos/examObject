<?php
namespace Exam;

require '../../vendor/autoload.php';

class Model
{
    use Carbon\Carbon;
    protected $created_at;
    protected $updated_at;

    public function __construct($created_at, $updated_at)
    {
        $this->created_at = Carbon($created_at);
        $this->updated_at = Carbon($updated_at);
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = Carbon($created_at);
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt()
    {
        $this->updated_at = Carbon::now();
    }
}
