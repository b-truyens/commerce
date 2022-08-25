<?php

namespace Tests\Feature\Modules\Post\Http\Controllers;

use Tests\TestCase;

/**
 * @see \Modules\Post\Http\Controllers\PostCommentController
 */
class PostCommentControllerTest extends TestCase
{
    /**
     * @test
     */
    public function destroy_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->delete(route('post_comments.destroy', ['post_comment' => $post_comment]));

        $response->assertRedirect(back());
        $this->assertModelMissing($postComment);

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function edit_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('post_comments.edit', ['post_comment' => $post_comment]));

        $response->assertOk();
        $response->assertViewIs('post::comment.edit');
        $response->assertViewHas('comment');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function index_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('post_comments.index'));

        $response->assertOk();
        $response->assertViewIs('post::comment.index');
        $response->assertViewHas('comments');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function store_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->post(route('post-comment.store', ['slug' => $slug]), [
            // TODO: send request data
        ]);

        $response->assertRedirect(back());

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function update_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->put(route('post_comments.update', ['post_comment' => $post_comment]), [
            // TODO: send request data
        ]);

        $response->assertOk();
        $response->assertViewIs('post::comment.index');

        // TODO: perform additional assertions
    }

    // test cases...
}