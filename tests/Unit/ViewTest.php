<?php
 
test('a welcome view can be rendered', function () {
    $view = $this->view('welcome', ['name' => 'Taylor']);
 
    $view->assertSee('Taylor');
});