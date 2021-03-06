<?php

class App_Aspect_Test_After implements BEAR_Aspect_After_Interface
{
    /**
     * afterアドバイス
     *
     * リソースリクエストの後にコールされます。
     *
     * @param array                 $result    リソースリクエスト結果
     * @param BEAR_Aspect_JoinPoint $joinPoint ジョインポイント
     *
     * @return array
     */
    public function after($result, BEAR_Aspect_JoinPoint $joinPoint)
    {
        $result['age'] = 10;

        return $result;
    }
}
