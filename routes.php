<?php

    Route::set('index.php', function() {
        Index::CreateView('Index');
    });

    Route::set('folder1-view', function() {
        viewOne::CreateView('view');
    });

    Route::set('folder2-view', function() {
        viewTwo::CreateAnotherView('view');
    });

?>