https://medium.com/@winnieliang/how-to-run-a-simple-html-css-javascript-application-on-heroku-4e664c541b0b for guidelineon how to deploy basic HTML / CSS on Heroku.

Set the environment variable `BACK_URL` to be used by index.php file to set the proper backend url.
`heroku config:set BACK_URL=$(heroku apps:info | grep "Web URL" | awk '{print $3}')`

