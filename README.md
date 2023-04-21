# Instructions

<h4>Step 1:</h4>
git clone https://github.com/syn-code/todo-app.git

<h4>Step 2:</h4>
<p>Rename the `.env.example` to `.env`</p>

<h4>Step 3:</h4>
`docker-compose build --no-cache`

<h4>Step 4:</h4>
`docker-compose up -d`

<h4>Step 5:</h4>
<p>Jump into the container</p>
`docker exec -it example-app-laravel.test-1 bash`

<p>Then run the following command</p>
`php artisan migrate --seed`

<h4>Step 6:</h4>
<p>You can then access `http://localhost/my-todo-list`</p>
