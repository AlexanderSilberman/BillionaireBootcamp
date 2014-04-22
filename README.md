#BillionaireBootcamp#
===================

The Billionaire Bootcamp group

This is the github page we will be using for the project for version control purposes.

I made the initial one so you guys have to clone it so we all have the same thing.

Before you can really do anything you need to send me your github name so I can set you up as a collaborator otherwise you have to do pull requests and stuff and blahhhhh.

Go into terminal or the command line (Mac and Windows respecitvely, get used to using them) and go to the location where you want to put all this stuff. 
Note: Cloning will make its own folder for you. So rather then making a billionairebootcam folder on the desktop and then cloning into that just go to your desktop since it will make a folder for you.

For Macs: Use ls to list all the folders and files that are where you are. cd followed by a folder name will send you to the folder. 

Example: 
ls  (ALL THE FOLDERS)
cd Desktop

For Windows I believe its dir instead of ls to list it out.

When inside do the command:  git clone https://github.com/AlexanderSilberman/BillionaireBootcamp.git

That will put the folder on your computer.

cd into that new folder.

Now you are connected to the repository.


## How to copy repository content ##

go to folder via changing directories that you cloned earlier called BillionaireBootcamp

once in the folder type: git pull

##If you wish to add things.##

git status lists all the things that are new in your folder or have been updated. 

git add [file] preps a file to be added

git commit -m [some message in quotes] commits your files.

git push will push the files to the repository.

##Common Problems (for me at least)##

The need to keep doing git pull origin master instead of just git pull can be dealt with by doing git branch --set-upstream-to=origin/master master

That will set tracking for the main branch.


Need to merge and get a weird doc you can't do stuff with.

Github is opening a document software called vim to put the commit message in. You need to:

1. Press i

2. Write your merge commit

3. Press Esc

4: Press :wq and then press enter

That will write and quit the program


Alternatively

You can set the program as emacs by doing

git config --global core.editor "emacs"

Then when it opens up you can just write it and then do Control X and then Control S to save. Then Control X and then Control C to close it. 

##IF YOU ARE USING MAMP##

Don't cd to desktop. cd /applications

This will send you to the applications folder for the entire computer, not just the user. That's where MAMP will be. And then cd htdocs ect.

Made my Alexander Silberman
Ganesh Sundar
Drew Terry
Erika Ignacio
Javan Shah
Vinay Joshi

This is a test.