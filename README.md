# Electronic Business

Project from electronic business on fifth semester of Computer Science on Gdansk University of Technology.

# Important note
In case of any creation of new containters if the PrestaShop doesn't want to load itself there is a high chance that files in its container don't have properly set persmissions.
Solution: Enter cmd of PrestaShop container and type ```chmod 777 -R *```.

## Installation
**Please make your own fork (copy) of the project and copy its url!**\
You can copy project to your account by clicking fork button on the main page of repository in the top-right corner.
```cmd
git clone [fork project url] [project directory]
sudo chmod +777 [project directory]
cd [project directory]
```

## Usage
Run commands from project directory.

```bash
# Create / start containers: 
docker compose up # If container is being created its database will be initialized with file from database/ folder.
# Close containers:
docker compose down
```

## Contributing
If it is your first time contributing you may not have added the remote upstream. In that case in your project directory type:\
```git remote add upstream [original project url]```.

1. Log into PhpMyAdmin (http://localhost:8181/) with credentials from docker-compose.yml (user + password).
2. Choose ps_database -> export -> Go. 
3. Overwrite previous .sql file with new one (database/ folder). Use, e.g. Visual Studio Code (type "code ." into Ubuntu cmd, to open VS Code).
4. Enter folder with project.
5. ```git add --all # Unless there are some files you don't want to add. In that case afterwards you can use git rm -r --cached <folder> or git rm --cached <file>.```
6. ```git commit -m [commit comment] # Remember about quotes.```
7. ```git push origin master.```
8. After pushing changes to your fork you can open your remote fork with it and make pull request on upstream.

## Pulling changes

1. Enter project directory.
2. If containers are running close them down.
3. ```git pull upstream```
4. Clear your browser cache.
5. ```sudo apt-get clean```
6. ```sudo apt-get autoclean```
7. Remove old containers from docker desktop. Don't remove volumes and images.
8. Run containers again.
9. If everything is correct push the changes to keep your remote fork up to date.

## Problems
In case of problems you can check logs in docker desktop containers and look up for more information online.
* If there is issue with pulled changes from git you can always use ```git reset --hard```.
* In case of PrestaShop not running properly:
  * check if you have enough permission on all of the files,
  * try turning off your browser extensions,
  * check if some files were not added due to .gitignore,
  * verify whether some cache or .php files are not causing issues,
  * check if database is already ready.
* If some ports are unavailable you can remove them from docker-compose.yml - some free should be chosen automatically. Otherwise you can set them manually.
* If there is problem with closing containers or running them make sure everything was properly closed or/and restart computer.

## License
[MIT](https://choosealicense.com/licenses/mit/)
