<?php
/**
 *
 * Created by PhpStorm.
 * @author <qiufeng> (991564110@qq.com)
 * @date: 2017/4/8 13:41
 * project: test
 */

namespace designMode;


use Countable;

class BookList implements Countable
{

    private $books;

    public function getBook($bookNumberToGet)
    {
        if (isset($this->books[$bookNumberToGet])) {
            return $this->books[$bookNumberToGet];
        }

        return null;
    }

    /**
     * @param Book $book
     */
    public function addBook(Book $book)
    {
        $this->books[] = $book;
    }

    /**
     * @param Book $bookToRemove
     */
    public function removeBook(Book $bookToRemove)
    {
        foreach ($this->books as $key => $book) {
            /** @var Book $book */
            if ($book->getAuthorAndTitle() === $bookToRemove->getAuthorAndTitle()) {
                unset($this->books[$key]);
            }
        }
    }


    /**
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count()
    {
        // TODO: Implement count() method.
        return count($this->books);
    }


    /**
     * Return all the values of an array
     */
    public function sortBook()
    {
        $this->books = array_values($this->books);
    }
}