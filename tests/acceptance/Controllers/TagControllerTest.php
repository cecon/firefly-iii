<?php
/**
 * TagControllerTest.php
 * Copyright (C) 2016 Sander Dorigo
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */


/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-19 at 15:39:29.
 */
class TagControllerTest extends TestCase
{

    /**
     * @covers FireflyIII\Http\Controllers\TagController::__construct
     * @covers FireflyIII\Http\Controllers\TagController::create
     */
    public function testCreate()
    {
        $this->be($this->user());
        $this->call('GET', '/tags/create');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers FireflyIII\Http\Controllers\TagController::delete
     */
    public function testDelete()
    {
        $this->be($this->user());
        $this->call('GET', '/tags/delete/1');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers FireflyIII\Http\Controllers\TagController::destroy
     */
    public function testDestroy()
    {
        $this->be($this->user());
        $this->call('POST', '/tags/destroy/1');
        $this->assertResponseStatus(302);
        $this->assertSessionHas('success');
    }

    /**
     * @covers FireflyIII\Http\Controllers\TagController::edit
     */
    public function testEdit()
    {
        $this->be($this->user());
        $this->call('GET', '/tags/edit/1');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers FireflyIII\Http\Controllers\TagController::hideTagHelp
     */
    public function testHideTagHelp()
    {
        $this->be($this->user());
        $this->call('POST', '/tags/hideTagHelp/true');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers FireflyIII\Http\Controllers\TagController::index
     */
    public function testIndex()
    {
        $this->be($this->user());
        $this->call('GET', '/tags');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers FireflyIII\Http\Controllers\TagController::show
     */
    public function testShow()
    {
        $this->be($this->user());
        $this->call('GET', '/tags/show/1');
        $this->assertResponseStatus(200);
    }

    /**
     * @covers FireflyIII\Http\Controllers\TagController::store
     * @covers FireflyIII\Http\Requests\TagFormRequest::authorize
     * @covers FireflyIII\Http\Requests\TagFormRequest::rules
     */
    public function testStore()
    {
        $args = [
            'tag' => 'Some new tag',
            'tagMode' => 'nothing',
        ];

        $this->session(['tags.create.url' => 'http://localhost']);

        $this->be($this->user());
        $this->call('POST', '/tags/store', $args);
        $this->assertResponseStatus(302);
        $this->assertSessionHas('success');
    }

    /**
     * @covers FireflyIII\Http\Controllers\TagController::update
     * @covers FireflyIII\Http\Requests\TagFormRequest::authorize
     * @covers FireflyIII\Http\Requests\TagFormRequest::rules
     */
    public function testUpdate()
    {
        $args = [
            'tag' => 'Some new tag yay',
            'id'  => 1,
            'tagMode' => 'nothing',
        ];

        $this->session(['tags.edit.url' => 'http://localhost']);

        $this->be($this->user());
        $this->call('POST', '/tags/update/1', $args);
        $this->assertResponseStatus(302);
        $this->assertSessionHas('success');
    }
}
