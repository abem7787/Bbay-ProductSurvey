Full-Stack Application with Restful API and Laravel + React.

What to expect:

The overall aim is for an admin to drag and drop a URL link to as many recipients as it takes for an online questionnaire, wheater by email, social media platforms, or through text. You can send and edit questions on the fly. The general idea is to get a response from others to take a survey question(s) and to have the completed questionnaire exist as viewable data for 
straightforward analysis.
  
More so, The admin can set question types, set a description per question, and have a total complete acknowledgment of the dates, status, and number of interviews.
 

Why would you ever need this:
By default, you can use this for several occasions. 
Perhaps you are looking for a method to gather information by using relevant questions from a sample of people, and you want to understand a population or a demographic as a whole. At a least, perhaps your role as a recruiter puts you in charge of recruitment, screening, and training job applicants. For all as it may, the Testing survey has you covered with easy-to-use ui functionalities. 


Prerequisite:

1: Git clone folder

2: npm i for node mode dependencies

3: In baseUrl add http://localhost:8000/api to axiosClient function.

const axiosClient = axios.create({
  baseURL: 'http://localhost:8000/api'
});


4:  Make a new .env, 

drag and drop to config:
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:7iEPCdbI3iHx6Cd8ccD3k9JVNZI0smsNCWIpzn7qoaE=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_react_survey2
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"


5. Laravel + Vite is install, but in case the installation falls short, tap on your termial: "Laravel new" and then tag the main directory to complete installation.
6. Php artisan serve on terminal to begin the program. In case you come across this bug: php artisan: "failed to open stream: No such file or directory". composer update instead of deleting the composer.lock file when facing issues,
7. Have ethier(xampp, mamp, wamp,) and create a database with mysql.
8. Write "php artisan serve" on one terminal.
9. Then write "php artisan migrate" to update tables on mysql.
10. Check the tables wheater they had arrive on your mysql databse.
11. npm run dev to activate url on browser.



