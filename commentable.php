<?php



interface Commentable
{
    public function getType(): string;
    public function getEntityId(): int;
}

interface Mailable
{
    public function getEmail(): string;
}

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

class User extends Model
{
    public $name;
    public $age;

    public function getUserId(): int
    {
        return rand(1,100);
    }
}

class Photo extends Model implements Commentable
{
    public function getType(): string
    {
        return 'asd';
    }

    public function getEntityId(): int
    {
        return 1;
    }
}

class Post extends Model implements Commentable
{
    public function getType(): string
    {
        return self::class;
    }

    public function getEntityId(): int
    {
        return rand(1,100);
    }
}

class Video extends Model implements Commentable
{
    public function getType(): string
    {
        return self::class;
    }

    public function getEntityId(): int
    {
        return rand(1,100);
    }
}


class Comment extends Model
{

}


leaveComment(new User(), new Photo(), 'test');
leaveComment(new User(), new Post(), 'test');
leaveComment(new User(), new Video(), 'test');

function leavVideoComment(User $user, Commentable $model, string $comment)
{
    echo "I will leave comment for {$model->getType()} with ID: {$model->getEntityId()} from userID: {$user->getUserId()}. Text: $comment";
}



















