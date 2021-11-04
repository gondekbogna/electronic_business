# Electronic Business

Project from electronic business on fifth semester of Computer Science on Gdansk University of Technology.

## Installation
**Please make your fork of a project and copy the project url from your own fork!**
```cmd
git clone [project url] [project directory]
sudo chmod +777 [project directory]
cd [project directory]
```

## Usage
Run commands from project directory.

```bash
# Create / start containers: 
docker compose up
# Close containers:
docker compose down
```

## Contributing

1. Log into PhpMyAdmin (http://localhost:8181/) with credentials from docker-compose.yml (user + password).
2. Choose ps_database -> export -> Go. 
3. Overwrite previous .sql file with new one (database/ folder). Use, e.g. Visual Studio Code (type "code ." into Ubuntu cmd, to open VS Code).
4. Enter folder with project.
5. ```git add --all # Unless there are some files you don't want to add. In that case afterwards you can use git rm -r --cached <folder> or git rm --cached <file>.```
6. ```git commit -m [commit comment] # Remember about quotes.```
7. ```git push origin master.```
8. After pushing changes to your fork you can open GitHub with it and make pull request on upstream.

## Pulling changes

1. Enter project directory.
2. If containers are running close them down.
3. ```git pull upstream```
4. Clear your browser cache.
5. ```sudo apt-get clear```
6. ```sudo apt-get autoclear```
7. Remove old containers from docker desktop. Don't remove volumes and images.
8. Run containers again.
9. If everything is correct push the changes to keep your fork up to date.

## Problems
In case of problems you can check logs in docker desktop containers and look up for more information online.
* If there is issue with pulled changes from git you can always use ```git reset --hard```.
* In case of PrestaShop not running properly:
  * check if you have enough permission on all of the files,
  * try turning off your browser extensions,
  * check if some files were not added due to .gitignore,
  * verify whether some cache or .php files are not causing issues.
* If some ports are unavailable you can remove them from docker-compose.yml - some free should be chosen automatically. Otherwise you can set them manually.
* If there is problem with closing containers or running them make sure everything was properly closed or/and restart computer.

## License
[MIT](https://choosealicense.com/licenses/mit/)
