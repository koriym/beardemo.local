<?php


/**
 * トラックバックリソース
 */
class App_Ro_User_Blog_Entry_Trackback extends App_Ro
{
    /**
     * Read
     *
     * @param array $values
     *
     * @return array
     * @requied id
     */
    public function onRead($values)
    {
        $id = 50 + $values['entry_id'];
        $title = "記事ID({$values['entry_id']})のトラックバック";
        $result = [];
        $result[] = ['id' => $id, 'title' => "{$title}$id"];
        $id++;
        $result[] = ['id' => $id, 'title' => "{$title}$id"];
        $id++;
        $result[] = ['id' => $id, 'title' => "{$title}$id"];
        $id++;

        return $result;
    }
}
