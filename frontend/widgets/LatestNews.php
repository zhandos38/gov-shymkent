<?php
namespace frontend\widgets;

class LatestNews extends \yii\base\Widget
{
    public function run()
    {
        $posts = \common\models\Post::find()->orderBy(['id' => SORT_DESC])->limit(3)->all();

        return $this->render('latest-news', [
            'posts' => $posts
        ]);
    }
}