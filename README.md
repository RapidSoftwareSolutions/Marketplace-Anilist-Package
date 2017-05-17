[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Anilist/functions?utm_source=RapidAPIGitHub_AnilistFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Anilist Package
Connect to the Anilist API to host language-agnostic functions and algorithms via an API. Test an API call and export the code snippet into your app.
* Domain: [anilist.co](https://anilist.co)
* Credentials: clientId, clientSecret, code, accessToken

## How to get credentials:
1. Log into your AniList account (or create one if you haven’t already) and go to [the developer settings](https://anilist.co/settings/developer). Click ‘Create New Client’ and enter your client’s information, once saved you will receive your client id and secret.
2. Get authorization code for [this instruction](https://anilist-api.readthedocs.io/en/latest/authentication.html).
2. Make request to getAccessToken method.
 
## Anilist.getAccessToken
Return access token

| Field       | Type       | Description
|-------------|------------|----------
| clientId    | credentials| Client ID
| clientSecret| credentials| Client secret
| code        | credentials| Authorization code
| redirectUri | String     | Client redirect uri

## Anilist.getUser
Return current user

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token

## Anilist.getUserActivity
Get current user activity

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token

## Anilist.createUserActivity
Create user activity

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| text       | String     | Activity text

## Anilist.replyUserActivity
Activity reply

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| text       | String     | Activity text
| replyId    | String     | Activity id

## Anilist.deleteUserActivity
Delete single activity

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| activityId | String     | Activity id

## Anilist.getUserNotifications
Returns up to 10 notifications of the current user.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token

## Anilist.getUserFollowers
Returns followers of the current user.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| userId     | String     | userId

## Anilist.getUserFollowing
Returns following of the current user.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| userId     | String     | userId

## Anilist.getUserFavourites
Returns a user’s favourites.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| userId     | String     | userId

## Anilist.getUserAiring
Returns anime list entry with small model anime, where the anime is currently airing and being currently watched by the user.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token

## Anilist.userSearch
Returns small user models

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| query      | String     | Search string

## Anilist.getAnimeList
Get anime list

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| userId     | String     | User ID

## Anilist.createAnimeListEntry
Get anime list

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| id         | String     | Anime id
| listStatus | String     | ```watching```,```completed```,```on-hold```,```dropped```,```plan to watch```
| notes      | String     | List description
| hidden     | Boolean    | List hidden

## Anilist.editAnimeListEntry
Edit anime list entry

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| id         | String     | Anime id
| listStatus | String     | ```watching```,```completed```,```on-hold```,```dropped```,```plan to watch```
| notes      | String     | List description
| hidden     | Boolean    | List hidden

## Anilist.getUserMangalist
Get user mangalist

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| userId     | String     | User id

## Anilist.createMangaListEntry
Create mangalist

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| id         | String     | Manga id
| listStatus | String     | ```reading```,```completed```,```on-hold```,```dropped```,```plan to read```
| notes      | String     | List description
| hidden     | Boolean    | Manga list hidden

## Anilist.editMangaListEntry
Edit mangalist

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| id         | String     | Manga id
| listStatus | String     | ```reading```,```completed```,```on-hold```,```dropped```,```plan to read```
| notes      | String     | List description
| notes      | String     | Manga list description
| hidden     | Boolean    | Manga list hidden

## Anilist.deleteMangaListEntry
Delete manga list entry

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| manId      | String     | Manga list id

## Anilist.deleteAnimeListEntry
Delete anime list entry

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| animeId    | String     | Anime list id

## Anilist.getSeriesPage
Returns a series model.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| seriesType | String     | ```anime``` or ```manga```
| id         | String     | Series id

## Anilist.getSeriesAiring
Returns a series airing.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| seriesType | String     | ```anime``` or ```manga```
| id         | String     | Series id

## Anilist.getSeriesList
Returns up to 40 small series models.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| seriesType | String     | ```anime``` or ```manga```

## Anilist.toggleFavouriteSeries
Toggle favourite series.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| seriesType | String     | ```anime``` or ```manga```
| id         | String     | Series id

## Anilist.searchSeries
Search series models.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| seriesType | String     | ```anime``` or ```manga```
| query      | String     | Search string

## Anilist.getCharacter
Get character model

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| characterId| String     | Character id

## Anilist.getCharacterPage
Get character page

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| characterId| String     | Character id

## Anilist.toggleFavouriteCharacter
Toggle favourite character

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| characterId| String     | Character id

## Anilist.searchCharacter
Search character

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| query      | String     | Search string

## Anilist.getStaff
Returns staff model.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| staffId    | String     | Staff ID

## Anilist.getStaffPage
Get staff page

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| staffId    | String     | Staff ID

## Anilist.toggleFavouriteStaff
Toggle favourite staff

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| staffId    | String     | Favourite staff ID

## Anilist.searchStaff
Search staff model

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| query      | String     | Search string

## Anilist.getStudio
Returns a studio model.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| studioId   | String     | Studio ID

## Anilist.getStudioPage
Get studio page

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| studioId   | String     | Studio ID

## Anilist.searchStudio
Search studio model

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| query      | String     | Search string

## Anilist.getSingleReview
Returns review model with small anime/manga and small user model.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| seriesType | String     | ```anime``` or ```manga```
| reviewId   | String     | Review id

## Anilist.getReviews
Returns array of review models with anime/manga and small user model.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| seriesType | String     | ```anime``` or ```manga```
| id         | String     | ```anime``` or ```manga``` id

## Anilist.getUserReviews
Returns array of review models with anime/manga and small user model.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| userId     | String     | User id

## Anilist.setReviewRate
Set review rate

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| id         | String     | Id of review to rate
| rating     | String     | ```0``` no rating, ```1``` up/positive rating, ```2``` down/negative rating

## Anilist.getRecentForumPage
Returns threads ordered by most recent activity or creation.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token

## Anilist.getNewForumPage
Returns threads ordered by most recent creation.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token

## Anilist.getUserSubscribedPage
Returns threads the user has subscribed to, ordered by most recent activity or creation.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token

## Anilist.getSingleThread
Get single thread

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| threadId   | String     | Thread id

## Anilist.createThread
Create thread

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| title      | String     | Thread title
| body       | String     | Thread body
| tags       | String     | Comma separated tag ids
| tagsAnime  | String     | Comma separated anime ids
| tagsManga  | String     | Comma separated manga ids

## Anilist.editThread
Edit thread

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Access Token
| title      | String     | Thread title
| body       | String     | Thread body
| tags       | String     | Comma separated tag ids
| tagsAnime  | String     | Comma separated anime ids
| tagsManga  | String     | Comma separated manga ids

