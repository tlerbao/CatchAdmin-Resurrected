<?php
namespace Deployer;

require 'recipe/common.php';

// Config

set('repository', 'git@github.com:tlerbao/CatchAdmin-Resurrected.git');

set('branch', 'demo');

set('composer_options', ' --ignore-platform-reqs');

add('shared_files', [
    '.env'
]);
add('shared_dirs', [
    'runtime',
    'public/upload',
    'public/exports',
]);
add('writable_dirs', [
    'runtime/',
    'public/upload/',
    'public/exports/'
]);

// Hosts

host('BeiJing')
    ->set('hostname', 'TalentServerBeiJing')
    ->set('deploy_path', '/www/wwwroot/Api.MiaoQiang.top');

// Hooks

desc('Deploy your project');
task('deploy', [
    'deploy:prepare',
    'deploy:publish',
    'deploy:vendors'
]);
after('deploy:failed', 'deploy:unlock');
