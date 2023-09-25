<?php 

namespace App\Repository;

use App\Core\Repository;
use App\Model\Event;

final class EventRepository extends Repository
{
    public function getLatestEvents($limit, $isEnabled)
    {
        $sql = "SELECT * FROM event WHERE enabled = :enabled ORDER BY created_at DESC LIMIT $limit";
        $statement = $this->db->query($sql, [
            ':enabled'=> $isEnabled
        ]);

        $events = [];

        while ($row = $statement->fetch()) {
            $date = new \DateTime($row['start_at']);
            $time = new \DateTime($row['time']);
            $event = new Event();
            $event->setTitle($row['title']);
            $event->setContent($row['content']);
            $event->setImage($row['image']);
            $event->setStartAt($date);
            $event->setTime($time);
            $event->setPrice($row['price']);
            array_push($events, $event);
        }

        return $events;
    }
}