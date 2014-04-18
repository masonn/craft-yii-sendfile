craft-yii-sendfile
==================

Super simple, exposes Yii::app()->getRequest()->sendFile / craft()->request->sendFile() to twig template filter

No error checking or anything, so make sure your field exists in the template.

The purpose of this is to provide a method to download a local file located outside of the public directory.  

Create a folder outside of the public folder, then an Asset Source referencing that folder (I don't think URL matters).

Create a section and add the asset field (for the example I used memberFile) and a user field.  Then, in template, test to see if the
currentUser is the correct user, and if so, call: {{ entry.memberFile.first | sendfile }}.  This will download the file.