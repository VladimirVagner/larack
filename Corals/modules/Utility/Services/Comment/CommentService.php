<?php

namespace Corals\Modules\Utility\Services\Comment;

use Corals\Foundation\Services\BaseServiceClass;
use Corals\Modules\Utility\Classes\Comment\CommentManager;

class CommentService extends BaseServiceClass
{
    /**
     * @param $data
     * @param $commentableClass
     * @param $commentable_hashed_id
     * @param null $author
     * @return \Corals\Modules\Utility\Models\Comment\Comment|\Illuminate\Database\Eloquent\Model
     */
    public function createComment($data, $commentableClass, $commentable_hashed_id, $author = null)
    {
        if (is_null($commentableClass)) {
            abort(400, 'Comment class is null');
        }

        $commentable = $commentableClass::findByHash($commentable_hashed_id);

        if (!$commentable) {
            abort(404, 'Not Found!!');
        }

        if (is_null($author)) {
            $author = user();
        }

        $commentableManagerClass = new CommentManager($commentable, $author);

        return $commentableManagerClass->createComment([
            'body' => $data['body'],
            'status' => $data['status'] ?? null,
            'is_private' => in_array(data_get($data, 'is_private'), ['true', 1])
        ]);
    }


    public function replyComment($data, $comment)
    {
        $commentableClass = new CommentManager($comment, user());

        $reply = $commentableClass->createComment([
            'body' => $data['body'],
            'status' => $data['status'] ?? null,
        ]);

        return $reply;
    }
}
