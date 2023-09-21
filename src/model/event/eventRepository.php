<?php 

class EventRepository 
{
    public function getLatestEvents($db, $limit, $isEnabled)
    {
        $sql = "SELECT * FROM event WHERE enabled = :enabled ORDER BY created_at DESC LIMIT :limit";
        $statement = $db->prepare($sql);
        $statement->bindParam(':enabled', $isEnabled, PDO::PARAM_BOOL);
        $statement->bindParam(':limit', $limit, PDO::PARAM_INT);
        $statement->execute();
        $events = [];

        while ($row = $statement->fetch()) {
            $date = new DateTime($row['start_at']);
            $time = new DateTime($row['time']);
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