# GCloud Based Authentication System

Kevin Vu 2020

© Kevin Vu 2020. Disclaimer: This repo is an asset of Kevin Vu. Any plagiarism act will be reported.

- Link: https://gcloud-based-registration.appspot.com/

## Project Brief
GCloud Based Authentication System is a web application simulate a simple authentication system.

## Stack
- Front end: **HTML/CSS/JS - Bootstrap**
- Back end: **PHP** (Only pure PHP)
- DB: **Google Cloud Datastore** (NoSQL cloud based db)
- Deploy Platform: **Google App Engine Flexible**
- Other Cloud Services:
  - **Google Cloud Shell + Text Editor**

## Setting Up
- Create a new Google CLoud Project
- Create Datastore instance and mock entities
  - Mock entities properties: Kind:user, id (Type: Key), name (Type: String), password (Type: Integer)
  - ![Imgur](https://i.imgur.com/hb0QtO1.png)
- Activate a Cloud Shell session
  - `Open in new window` to access Google Cloud Shell Text Editor
  - `gcloud config set project [PROJECT_ID]` to access correct project
- `git clone https://github.com/kevinvu184/GcloudBasedRegistration.git`
- `cd GcloudBasedRegistration/`
- `php -S localhost:8080 -t www/`
- `dev_appserver.py ./ --php_executable_path=/usr/bin/php-cgi`
- `gcloud app deploy`
