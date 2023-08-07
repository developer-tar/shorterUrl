## Project Name
Shortner url

Description
This project is a web application developed using Laravel, a powerful PHP framework for building modern web applications. The application provide a details of which user create the shortner url from original url and user has seen own shortner url with record of how much it seen now and admin purpose is to check which user make the shortner url and how much times hits to accessed own user url.



To run this application locally, follow these steps:                                                                                                                       
## Step 1:
- Clone the repository to your local machine:                                                                                                                     - git clone https://github.com/developer-tar/shorterurl.git
- Change into the project directory:
- cd shorterurl

## Step 2:
- Install the project dependencies using Composer: 
- composer install
## Step3:
#rename the  .env.example file  to .env:
## Step4:
- Generate an application key:
- php artisan key:generate
## Step5:
- Migrate the database:
- php artisan migrate
## step6:
- Serve the application:
- php artisan serve
## Access the application in your browser at http://localhost:8000.

