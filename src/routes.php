<?php
$routes = [
    'getAccessToken',
    'getUser',
    'getUserActivity',
    'createUserActivity',
    'replyUserActivity',
    'deleteUserActivity',
    'getUserNotifications',
    'getUserFollowers',
    'getUserFollowing',
    'getUserFavourites',
    'getUserAiring',
    'userSearch',
    'getAnimeList',
    'createAnimeListEntry',
    'editAnimeListEntry',
    'getUserMangalist',
    'createMangaListEntry',
    'editMangaListEntry',
    'deleteMangaListEntry',
    'deleteAnimeListEntry',
    'getSeriesPage',
    'getSeriesAiring',
    'seriesBrowse',
    'toggleFavouriteSeries',
    'searchSeries',
    'getCharacter',
    'getCharacterPage',
    'toggleFavouriteCharacter',
    'searchCharacter',
    'getStaff',
    'getStaffPage',
    'toggleFavouriteStaff',
    'searchStaff',
    'getStudio',
    'getStudioPage',
    'searchStudio',
    'getSingleReview',
    'getReviews',
    'getUserReviews',
    'setReviewRate',
    'getRecentForumPage',
    'getNewForumPage',
    'getUserSubscribedPage',
    'getSingleThread',
    'createThread',
    'editThread'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

