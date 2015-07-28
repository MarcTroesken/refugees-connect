@servers(['live' => 'root@93.180.156.95'])

@task('deploy')
    cd /var/www/refugees-connect
    git pull origin master
    composer update
@endtask