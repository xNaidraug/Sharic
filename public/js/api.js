
function authenticate() {
    return gapi.auth2.getAuthInstance()
        .signIn({scope: "https://www.googleapis.com/auth/youtube https://www.googleapis.com/auth/youtube.force-ssl https://www.googleapis.com/auth/youtube.readonly https://www.googleapis.com/auth/youtubepartner"})
        .then(function () {
                console.log("Sign-in successful");
            },
            function (err) {
                console.error("Error signing in", err);
            });
}

function loadClient() {
    return gapi.client.load("https://content.googleapis.com/discovery/v1/apis/youtube/v3/rest")
        .then(function () {
                console.log("GAPI client loaded for API");
            },
            function (err) {
                console.error("Error loading GAPI client for API", err);
            });
}

// Make sure the client is loaded and sign-in is complete before calling this method.
function execute() {
    return gapi.client.youtube.search.list({
        "part": "snippet",
        "q": document.getElementById('search').value,
        "type": "video",
        'maxResult':5,
        'order':'relevance',
        'regionCode':'US'
    })
        .then(function (response) {
                // Handle the results here (response.result has the parsed body).
                console.log("Response", response);
            },
            function (err) {
                console.error("Execute error", err);
            });
}

gapi.load("client:auth2", function () {
    gapi.auth2.init({client_id:'225171417559-d4452bg1ujhkn60ivgh3up5oqqm67vpp.apps.googleusercontent.com'});
});

