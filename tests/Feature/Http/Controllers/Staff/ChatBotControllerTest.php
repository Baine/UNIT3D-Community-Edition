<?php

namespace Tests\Feature\Http\Controllers\Staff;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Staff\ChatBotController
 */
class ChatBotControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function destroy_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->delete(route('staff.bots.destroy', ['id' => $id]));

        $response->assertRedirect(withSuccess('The Humans Vs Machines War Has Begun! Humans: 1 and Bots: 0'));
        $this->assertDeleted($staff);

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function disable_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->get(route('staff.bots.disable', ['id' => $id]));

        $response->assertRedirect(withSuccess('The Bot Has Been Disabled'));

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function edit_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->get(route('staff.bots.edit', ['id' => $id]));

        $response->assertOk();
        $response->assertViewIs('Staff.chat.bot.edit');
        $response->assertViewHas('user');
        $response->assertViewHas('bot');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function enable_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->get(route('staff.bots.enable', ['id' => $id]));

        $response->assertRedirect(withSuccess('The Bot Has Been Enabled'));

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function index_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->get(route('staff.bots.index'));

        $response->assertOk();
        $response->assertViewIs('Staff.chat.bot.index');
        $response->assertViewHas('bots');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function update_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->patch(route('staff.bots.update', ['id' => $id]), [
            // TODO: send request data
        ]);

        $response->assertRedirect(withErrors($error));

        // TODO: perform additional assertions
    }

    // test cases...
}