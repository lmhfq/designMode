<?php
/**
 *
 * Created by PhpStorm.
 * @author <qiufeng> (991564110@qq.com)
 * @date: 2017/4/8 13:40
 * project: test
 */

namespace designMode;


class Book
{

    private $author;

    private $title;

    /**
     * Book constructor.
     * @param $title
     * @param $author
     */
    public function __construct($title, $author)
    {
        $this->author = $author;
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAuthorAndTitle()
    {
        return $this->getTitle() . ' by ' . $this->getAuthor();
    }
}