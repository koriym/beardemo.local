<?php
/**
 * This file is part of the beardemo.local package.
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */

/**
 * Advice
 *
 */
class App_Aspect_Transaction implements BEAR_Aspect_Around_Interface
{
    /**
     * トランザクションアドバイス
     *
     * トランザクションを実現するroundアドバイスです
     *
     * @param array                 $values
     * @param BEAR_Aspect_JoinPoint $joinPoint
     *
     * @return array
     */
    public function around(array $values, BEAR_Aspect_JoinPoint $joinPoint)
    {
        // 前処理
        $obj = $joinPoint->getObject();
        $db = $obj->getDb();
        $db->beginTransaction();
        //　オリジナルのメソッドを実行
        $result = $joinPoint->proceed($values);
        // 後処理
        if (! MDB2::isError($result)) {
            $db->commit();
        } else {
            $db->rollback();
        }

        return $result;
    }
}
