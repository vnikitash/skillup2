<?php

class Model
{
    public function find()
    {

    }
    public function update()
    {

    }
    public function create()
    {

    }
}

abstract class CommentableModel extends Model
{
    abstract function getEntityId(): int;
    abstract function getType(): string ;
}

abstract class Mailable extends CommentableModel
{

}

class User extends Model
{
    public function getUserId(): int
    {
        return rand(1,100);
    }
}

class Photo extends CommentableModel
{

    function getEntityId(): int
    {
        return rand(1,100);
    }

    function getType(): string
    {
        return self::class;
    }
}

class Post extends CommentableModel
{
    function getEntityId(): int
    {
        return rand(1,100);
    }

    function getType(): string
    {
        return self::class;
    }
}


class Comment extends Model
{

}

function leaveComment(User $user, CommentableModel $model, string $comment)
{
    echo "I will leave comment for {$model->getType()} with ID: {$model->getEntityId()} from userID: {$user->getUserId()}. Text: $comment";
}


$user = new User();
$post = new Post();
$photo = new Photo();

leaveComment($user, $photo, "hello world");
leaveComment($user, $post, "hello world");
leaveComment($user, $user, "hello world");

