<?php

/*
 * Photo upload helper function
 *
 * @param mixed $image
 * @param String $path
 * @param String|null $previousFileName
 *
 * @return String
 * */
function uploadPhoto($image, $path, $previousFileName = null)
{
    // renaming the file name with it's original extension
    $fileName = md5(time() . rand() . rand()) . '.' . $image->getClientOriginalExtension();

    // moving the file to the provided location
    $image->move($path, $fileName);

    // this is for removing the previous file in case of delete or update
    if ($previousFileName) {
        unlink(public_path($path . $previousFileName));
    }

    return $fileName;
}
