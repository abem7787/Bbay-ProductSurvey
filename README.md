Full-Stack Application with Restful API and Laravel + React.

What to expect:

The overall aim is for an admin to drag and drop a URL link to as many recipients as it takes for an online questionnaire, wheater by email, social media platforms, or through text. You can send and edit questions on the fly. The general idea is to get a response from others to take a survey question(s) and to have the completed questionnaire exist as viewable data for 
straightforward analysis.
  
More so, The admin can set question types, set a description per question, and have a total complete acknowledgment of the dates, status, and number of interviews.
 

Why would you ever need this:
By default, you can use this for several occasions. 
Perhaps you are looking for a method to gather information by using relevant questions from a sample of people, and you want to understand a population or a demographic as a whole. At a least, perhaps your role as a recruiter puts you in charge of recruitment, screening, and training job applicants. For all as it may, the Testing survey has you covered with easy-to-use ui functionalities. 


Prerequisite:

1. Before you start the Git clone folder make sure that your run the app on chrome.

2. npm i for node mode dependencies, and composer install on the main directory. 




3. In axios.js  add this to your baseUrl http://localhost:8000/api.

   Example:

const axiosClient = axios.create({
  baseURL: 'http://localhost:8000/api'
});





4:  Inside your explorer make a new .env, 

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


5. Add to scripts in package.json "dev": "vite --port=3000",
        "build": "vite build",
        "lint": "eslint src --ext js,jsx --report-unused-disable-directives --max-warnings 0",
        "preview": "vite preview"
6. Laravel + Vite is installed, but in case the installation falls short, tap on your terminal: "Laravel new" and then tag the main directory to complete the installation.

7. Write "php artisan serve" on the terminal to begin the program. If you encounter this bug: php artisan: "failed to open stream: No such file or directory". composer update instead of deleting the composer.lock file when facing issues.
8. cd to react folder "npm run dev" on a separate terminal to activate the browser.
9. Have ethier(xampp, mamp, wamp,) and create a database with mysql. If you encouter this bug:'vite' is not recognized as an internal or external command,
operable program or batch file. Write the following the command on the working directory: "npm intall" then npm run dev. Click on the localhost link
http://localhost:3000/ The broweer should display a login page. Nothing works at the momement because you need to migrate the tables to the database.
11. I'm using xammp I add the entire project folder onto the htdoc to sync with mysql database,Then written "php artisan migrate" to update tables on MySQL.
12. Check the tables wheater they had to arrive on your mysql database.





