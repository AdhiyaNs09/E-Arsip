<?php

use App\Controllers\StudyController;
use App\Controllers\StudentController;
use App\Controllers\TeacherController;
use App\Controllers\ScheduleController;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\ClassroomController;
use App\Controllers\DashboardController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'DashboardController::index');


$routes->get('/dashboard', [DashboardController::class, 'index']);

$routes->group('', ['filter' => 'role:admin, user'], function ($routes) {
  $routes->resource('teacher', ['controller' => 'TeacherController']);
  $routes->resource('student', ['controller' => 'StudentController']);
  $routes->resource('classroom', ['controller' => 'ClassroomController']);
  $routes->resource('study', ['controller' => 'StudyController']);
  $routes->resource('schedule', ['controller' => 'ScheduleController']);
  $routes->resource('document', ['controller' => 'DocumentController']);
  $routes->resource('user', ['controller' => 'UserController']);
  $routes->resource('profile', ['controller' => 'ProfileController']);
});
