<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Docs for helpus API</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "helpus.test";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("vendor/scribe/js/tryitout-3.26.0.js") }}"></script>

    <script src="{{ asset("vendor/scribe/js/theme-default-3.26.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                                                                            <ul id="tocify-header-0" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="introduction">
                        <a href="#introduction">Introduction</a>
                    </li>
                                            
                                                                    </ul>
                                                <ul id="tocify-header-1" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="authenticating-requests">
                        <a href="#authenticating-requests">Authenticating requests</a>
                    </li>
                                            
                                                </ul>
                    
                    <ul id="tocify-header-2" class="tocify-header">
                <li class="tocify-item level-1" data-unique="role-management-endpoints">
                    <a href="#role-management-endpoints">Role management endpoints</a>
                </li>
                                    <ul id="tocify-subheader-role-management-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="role-management-endpoints-GETapi-roles">
                        <a href="#role-management-endpoints-GETapi-roles">Show all roles</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="role-management-endpoints-POSTapi-roles">
                        <a href="#role-management-endpoints-POSTapi-roles">store new role</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="role-management-endpoints-GETapi-roles--id-">
                        <a href="#role-management-endpoints-GETapi-roles--id-">show a role</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="role-management-endpoints-PUTapi-roles--id-">
                        <a href="#role-management-endpoints-PUTapi-roles--id-">update a role</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="role-management-endpoints-DELETEapi-roles--id-">
                        <a href="#role-management-endpoints-DELETEapi-roles--id-">Remove a role</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-3" class="tocify-header">
                <li class="tocify-item level-1" data-unique="users-management-endpoints">
                    <a href="#users-management-endpoints">Users management endpoints</a>
                </li>
                                    <ul id="tocify-subheader-users-management-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="users-management-endpoints-GETapi-users">
                        <a href="#users-management-endpoints-GETapi-users">show all users</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="users-management-endpoints-POSTapi-users">
                        <a href="#users-management-endpoints-POSTapi-users">Store a new user</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="users-management-endpoints-GETapi-users--id-">
                        <a href="#users-management-endpoints-GETapi-users--id-">show one user</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="users-management-endpoints-PUTapi-users--id-">
                        <a href="#users-management-endpoints-PUTapi-users--id-">Update a user.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="users-management-endpoints-DELETEapi-users--id-">
                        <a href="#users-management-endpoints-DELETEapi-users--id-">Remove the specified user</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-4" class="tocify-header">
                <li class="tocify-item level-1" data-unique="handicap-management-endpoints">
                    <a href="#handicap-management-endpoints">handicap management endpoints</a>
                </li>
                                    <ul id="tocify-subheader-handicap-management-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="handicap-management-endpoints-GETapi-handicaps">
                        <a href="#handicap-management-endpoints-GETapi-handicaps">Show the list of all handicap</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="handicap-management-endpoints-POSTapi-handicaps">
                        <a href="#handicap-management-endpoints-POSTapi-handicaps">add new handicap in the database</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="handicap-management-endpoints-GETapi-handicaps--id-">
                        <a href="#handicap-management-endpoints-GETapi-handicaps--id-">show one handicap</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="handicap-management-endpoints-PUTapi-handicaps--id-">
                        <a href="#handicap-management-endpoints-PUTapi-handicaps--id-">Update the handicap</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="handicap-management-endpoints-DELETEapi-handicaps--id-">
                        <a href="#handicap-management-endpoints-DELETEapi-handicaps--id-">delete the handicap data</a>
                    </li>
                                                    </ul>
                            </ul>
        
                        
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: May 15 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>official docs of the helpus api includes the whole website api</p>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">helpus.test</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="role-management-endpoints">Role management endpoints</h1>

    

            <h2 id="role-management-endpoints-GETapi-roles">Show all roles</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>endpoint to show all the roles available in the system</p>

<span id="example-requests-GETapi-roles">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "helpus.test/api/roles" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "helpus.test/api/roles"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-roles">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;name&quot;: &quot;Tool and Die Maker&quot;,
            &quot;user_id&quot;: 7,
            &quot;updated_at&quot;: &quot;2022-05-15T14:35:29.000000Z&quot;,
            &quot;created_at&quot;: &quot;2022-05-15T14:35:29.000000Z&quot;,
            &quot;id&quot;: 12
        },
        {
            &quot;name&quot;: &quot;Clinical School Psychologist&quot;,
            &quot;user_id&quot;: 8,
            &quot;updated_at&quot;: &quot;2022-05-15T14:35:29.000000Z&quot;,
            &quot;created_at&quot;: &quot;2022-05-15T14:35:29.000000Z&quot;,
            &quot;id&quot;: 13
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-roles" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-roles"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-roles"></code></pre>
</span>
<span id="execution-error-GETapi-roles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-roles"></code></pre>
</span>
<form id="form-GETapi-roles" data-method="GET"
      data-path="api/roles"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-roles', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-roles"
                    onclick="tryItOut('GETapi-roles');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-roles"
                    onclick="cancelTryOut('GETapi-roles');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-roles" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/roles</code></b>
        </p>
                <p>
            <label id="auth-GETapi-roles" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-roles"
                                                                data-component="header"></label>
        </p>
                </form>

            <h2 id="role-management-endpoints-POSTapi-roles">store new role</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>endpoint to store new role in database</p>

<span id="example-requests-POSTapi-roles">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "helpus.test/api/roles" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"qui\",
    \"user_id\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "helpus.test/api/roles"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "qui",
    "user_id": 17
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-roles">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json">{'status' =&gt; 'ok',
'data' =&gt; [
'message' =&gt; 'role created successfuly'
]}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-roles" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-roles"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-roles"></code></pre>
</span>
<span id="execution-error-POSTapi-roles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-roles"></code></pre>
</span>
<form id="form-POSTapi-roles" data-method="POST"
      data-path="api/roles"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-roles', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-roles"
                    onclick="tryItOut('POSTapi-roles');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-roles"
                    onclick="cancelTryOut('POSTapi-roles');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-roles" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/roles</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-roles" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-roles"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-roles"
               value="qui"
               data-component="body" hidden>
    <br>
<p>the name of the role</p>
        </p>
                <p>
            <b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="user_id"
               data-endpoint="POSTapi-roles"
               value="17"
               data-component="body" hidden>
    <br>
<p>the id of the user who created the new role</p>
        </p>
        </form>

            <h2 id="role-management-endpoints-GETapi-roles--id-">show a role</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>give the details of one role</p>

<span id="example-requests-GETapi-roles--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "helpus.test/api/roles/10" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "helpus.test/api/roles/10"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-roles--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;name&quot;: &quot;Municipal Court Clerk&quot;,
        &quot;user_id&quot;: 1,
        &quot;updated_at&quot;: &quot;2022-05-15T14:35:29.000000Z&quot;,
        &quot;created_at&quot;: &quot;2022-05-15T14:35:29.000000Z&quot;,
        &quot;id&quot;: 14
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-roles--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-roles--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-roles--id-"></code></pre>
</span>
<span id="execution-error-GETapi-roles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-roles--id-"></code></pre>
</span>
<form id="form-GETapi-roles--id-" data-method="GET"
      data-path="api/roles/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-roles--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-roles--id-"
                    onclick="tryItOut('GETapi-roles--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-roles--id-"
                    onclick="cancelTryOut('GETapi-roles--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-roles--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/roles/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-roles--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-roles--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-roles--id-"
               value="10"
               data-component="url" hidden>
    <br>
<p>id of the role</p>
            </p>
                    </form>

            <h2 id="role-management-endpoints-PUTapi-roles--id-">update a role</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>endpoint to update a role with given id</p>

<span id="example-requests-PUTapi-roles--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "helpus.test/api/roles/18" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"quisquam\",
    \"user_id\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "helpus.test/api/roles/18"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "quisquam",
    "user_id": 17
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-roles--id-">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json">{'status' =&gt; 'ok',
'response' =&gt; [
'message' =&gt; 'role updated successfuly'
]}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-roles--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-roles--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-roles--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-roles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-roles--id-"></code></pre>
</span>
<form id="form-PUTapi-roles--id-" data-method="PUT"
      data-path="api/roles/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-roles--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-roles--id-"
                    onclick="tryItOut('PUTapi-roles--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-roles--id-"
                    onclick="cancelTryOut('PUTapi-roles--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-roles--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/roles/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/roles/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-roles--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-roles--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-roles--id-"
               value="18"
               data-component="url" hidden>
    <br>
<p>id of the role</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-roles--id-"
               value="quisquam"
               data-component="body" hidden>
    <br>
<p>the name of the role</p>
        </p>
                <p>
            <b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="user_id"
               data-endpoint="PUTapi-roles--id-"
               value="17"
               data-component="body" hidden>
    <br>
<p>the id of the user who created the new role</p>
        </p>
        </form>

            <h2 id="role-management-endpoints-DELETEapi-roles--id-">Remove a role</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>endpoint to delete a role from the system</p>

<span id="example-requests-DELETEapi-roles--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "helpus.test/api/roles/2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "helpus.test/api/roles/2"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-roles--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{'status' =&gt; 'ok',
'response' =&gt; [
'message' =&gt; 'role deleted'
]}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-roles--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-roles--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-roles--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-roles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-roles--id-"></code></pre>
</span>
<form id="form-DELETEapi-roles--id-" data-method="DELETE"
      data-path="api/roles/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-roles--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-roles--id-"
                    onclick="tryItOut('DELETEapi-roles--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-roles--id-"
                    onclick="cancelTryOut('DELETEapi-roles--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-roles--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/roles/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-roles--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-roles--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-roles--id-"
               value="2"
               data-component="url" hidden>
    <br>
<p>id of the role to delete</p>
            </p>
                    </form>

        <h1 id="users-management-endpoints">Users management endpoints</h1>

    

            <h2 id="users-management-endpoints-GETapi-users">show all users</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>see all user with they info and everything relate to them
this is not the handicap data it's only users data
like admins or simple user.</p>

<span id="example-requests-GETapi-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "helpus.test/api/users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "helpus.test/api/users"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 20,
            &quot;fullname&quot;: &quot;Ludie Stokes&quot;,
            &quot;username&quot;: &quot;Camron&quot;,
            &quot;role&quot;: &quot;Insurance Investigator&quot;,
            &quot;adress&quot;: &quot;6514 Braun Walk\nSteuberburgh, IL 78009-7254&quot;,
            &quot;number&quot;: 76507092,
            &quot;avatar&quot;: &quot;https://via.placeholder.com/640x480.png/001144?text=+autem&quot;
        },
        {
            &quot;id&quot;: 21,
            &quot;fullname&quot;: &quot;Lamont Hill DVM&quot;,
            &quot;username&quot;: &quot;Charles&quot;,
            &quot;role&quot;: &quot;Event Planner&quot;,
            &quot;adress&quot;: &quot;116 Annabell Hollow Apt. 602\nTorpview, AL 07775&quot;,
            &quot;number&quot;: 72178055,
            &quot;avatar&quot;: &quot;https://via.placeholder.com/640x480.png/0044ee?text=+ut&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users"></code></pre>
</span>
<span id="execution-error-GETapi-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users"></code></pre>
</span>
<form id="form-GETapi-users" data-method="GET"
      data-path="api/users"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users"
                    onclick="tryItOut('GETapi-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users"
                    onclick="cancelTryOut('GETapi-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users</code></b>
        </p>
                <p>
            <label id="auth-GETapi-users" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-users"
                                                                data-component="header"></label>
        </p>
                </form>

            <h2 id="users-management-endpoints-POSTapi-users">Store a new user</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>this endpoint store a new user based on the data passed in the request</p>
<aside class="notice">make sure to pass all the the required data</aside>

<span id="example-requests-POSTapi-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "helpus.test/api/users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"fullname\": \"qui\",
    \"username\": \"quibusdam\",
    \"role_id\": 1,
    \"password\": \"aliquid\",
    \"adress\": \"pariatur\",
    \"number\": 18,
    \"avatar\": \"vitae\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "helpus.test/api/users"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "fullname": "qui",
    "username": "quibusdam",
    "role_id": 1,
    "password": "aliquid",
    "adress": "pariatur",
    "number": 18,
    "avatar": "vitae"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-users">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json">{
'status' =&gt; 'ok',
'data' =&gt; [
'message' =&gt; 'successfuly created the account'
]
  }</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-users"></code></pre>
</span>
<span id="execution-error-POSTapi-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-users"></code></pre>
</span>
<form id="form-POSTapi-users" data-method="POST"
      data-path="api/users"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-users"
                    onclick="tryItOut('POSTapi-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-users"
                    onclick="cancelTryOut('POSTapi-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-users" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/users</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-users" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-users"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>fullname</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="fullname"
               data-endpoint="POSTapi-users"
               value="qui"
               data-component="body" hidden>
    <br>
<p>this user fullname</p>
        </p>
                <p>
            <b><code>username</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="username"
               data-endpoint="POSTapi-users"
               value="quibusdam"
               data-component="body" hidden>
    <br>
<p>this user username</p>
        </p>
                <p>
            <b><code>role_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="role_id"
               data-endpoint="POSTapi-users"
               value="1"
               data-component="body" hidden>
    <br>
<p>this user role in the system</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-users"
               value="aliquid"
               data-component="body" hidden>
    <br>
<p>this user role in the system</p>
        </p>
                <p>
            <b><code>adress</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="adress"
               data-endpoint="POSTapi-users"
               value="pariatur"
               data-component="body" hidden>
    <br>
<p>this user adress</p>
        </p>
                <p>
            <b><code>number</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="number"
               data-endpoint="POSTapi-users"
               value="18"
               data-component="body" hidden>
    <br>
<p>this user mobile number</p>
        </p>
                <p>
            <b><code>avatar</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="avatar"
               data-endpoint="POSTapi-users"
               value="vitae"
               data-component="body" hidden>
    <br>
<p>this user avatar link</p>
        </p>
        </form>

            <h2 id="users-management-endpoints-GETapi-users--id-">show one user</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>endpoint which returns the data of the specified with all his data.</p>

<span id="example-requests-GETapi-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "helpus.test/api/users/4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "helpus.test/api/users/4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 22,
        &quot;fullname&quot;: &quot;Prof. Edmund Vandervort&quot;,
        &quot;username&quot;: &quot;Ramon&quot;,
        &quot;role&quot;: &quot;Insurance Investigator&quot;,
        &quot;adress&quot;: &quot;8115 Lyla Extensions\nRolfsontown, MD 22991-2342&quot;,
        &quot;number&quot;: 75276074,
        &quot;avatar&quot;: &quot;https://via.placeholder.com/640x480.png/000055?text=+vitae&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users--id-"></code></pre>
</span>
<span id="execution-error-GETapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users--id-"></code></pre>
</span>
<form id="form-GETapi-users--id-" data-method="GET"
      data-path="api/users/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users--id-"
                    onclick="tryItOut('GETapi-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users--id-"
                    onclick="cancelTryOut('GETapi-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-users--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-users--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-users--id-"
               value="4"
               data-component="url" hidden>
    <br>
<p>id of the user</p>
            </p>
                    </form>

            <h2 id="users-management-endpoints-PUTapi-users--id-">Update a user.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>endpoint to update one user</p>

<span id="example-requests-PUTapi-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "helpus.test/api/users/3" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"fullname\": \"rerum\",
    \"username\": \"similique\",
    \"role_id\": 3,
    \"password\": \"voluptatum\",
    \"adress\": \"similique\",
    \"number\": 16,
    \"avatar\": \"esse\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "helpus.test/api/users/3"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "fullname": "rerum",
    "username": "similique",
    "role_id": 3,
    "password": "voluptatum",
    "adress": "similique",
    "number": 16,
    "avatar": "esse"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-users--id-">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json">{
'status' =&gt; 'ok',
'data' =&gt; [
'message' =&gt; 'successfuly updated the account'
]
  }</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-users--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-users--id-"></code></pre>
</span>
<form id="form-PUTapi-users--id-" data-method="PUT"
      data-path="api/users/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-users--id-"
                    onclick="tryItOut('PUTapi-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-users--id-"
                    onclick="cancelTryOut('PUTapi-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-users--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/users/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/users/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-users--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-users--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-users--id-"
               value="3"
               data-component="url" hidden>
    <br>
<p>id of the user to update</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>fullname</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="fullname"
               data-endpoint="PUTapi-users--id-"
               value="rerum"
               data-component="body" hidden>
    <br>
<p>this user fullname</p>
        </p>
                <p>
            <b><code>username</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="username"
               data-endpoint="PUTapi-users--id-"
               value="similique"
               data-component="body" hidden>
    <br>
<p>this user username</p>
        </p>
                <p>
            <b><code>role_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="role_id"
               data-endpoint="PUTapi-users--id-"
               value="3"
               data-component="body" hidden>
    <br>
<p>this user role in the system</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="PUTapi-users--id-"
               value="voluptatum"
               data-component="body" hidden>
    <br>
<p>this user role in the system</p>
        </p>
                <p>
            <b><code>adress</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="adress"
               data-endpoint="PUTapi-users--id-"
               value="similique"
               data-component="body" hidden>
    <br>
<p>this user adress</p>
        </p>
                <p>
            <b><code>number</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="number"
               data-endpoint="PUTapi-users--id-"
               value="16"
               data-component="body" hidden>
    <br>
<p>this user mobile number</p>
        </p>
                <p>
            <b><code>avatar</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="avatar"
               data-endpoint="PUTapi-users--id-"
               value="esse"
               data-component="body" hidden>
    <br>
<p>this user avatar link</p>
        </p>
        </form>

            <h2 id="users-management-endpoints-DELETEapi-users--id-">Remove the specified user</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>endpoint to remove the user with given id</p>

<span id="example-requests-DELETEapi-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "helpus.test/api/users/2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "helpus.test/api/users/2"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-users--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
'status' =&gt; 'ok',
'response' =&gt; [
'message' =&gt; 'successfuly deleted the account'
]
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-users--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-users--id-"></code></pre>
</span>
<form id="form-DELETEapi-users--id-" data-method="DELETE"
      data-path="api/users/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-users--id-"
                    onclick="tryItOut('DELETEapi-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-users--id-"
                    onclick="cancelTryOut('DELETEapi-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-users--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/users/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-users--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-users--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-users--id-"
               value="2"
               data-component="url" hidden>
    <br>
<p>id of the user to delete</p>
            </p>
                    </form>

        <h1 id="handicap-management-endpoints">handicap management endpoints</h1>

    

            <h2 id="handicap-management-endpoints-GETapi-handicaps">Show the list of all handicap</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>showing a list of the handicap with all their info needed to recognize them in the system</p>

<span id="example-requests-GETapi-handicaps">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "helpus.test/api/handicaps" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "helpus.test/api/handicaps"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-handicaps">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;fullname&quot;: &quot;Dr. Eladio Feil&quot;,
            &quot;adress&quot;: &quot;6874 Emmett Throughway Suite 366\nMullerborough, DC 81777&quot;,
            &quot;mobile_number&quot;: &quot;(907) 278-6828&quot;,
            &quot;year_of_birth&quot;: &quot;1971&quot;,
            &quot;ecocash_number&quot;: 110022211,
            &quot;lumicash_number&quot;: 110022211,
            &quot;bank_name&quot;: &quot;Bartoletti Parkway&quot;,
            &quot;bank_account_number&quot;: 6086712,
            &quot;story&quot;: &quot;Voluptatem ut optio et expedita soluta. Est sint omnis sunt explicabo amet sunt ipsa aut. Odio unde voluptate ut sit.&quot;,
            &quot;needed_money&quot;: 2285787,
            &quot;state_of_health&quot;: &quot;bad&quot;,
            &quot;images&quot;: {
                &quot;main_image&quot;: &quot;https://via.placeholder.com/640x480.png/00aa22?text=velit&quot;,
                &quot;first_primary_image&quot;: &quot;https://via.placeholder.com/640x480.png/00eedd?text=voluptatem&quot;,
                &quot;second_primary_image&quot;: &quot;https://via.placeholder.com/640x480.png/002211?text=et&quot;
            },
            &quot;donation_status&quot;: &quot;en cours&quot;,
            &quot;user&quot;: 3,
            &quot;family_situation&quot;: &quot;orphelins&quot;
        },
        {
            &quot;fullname&quot;: &quot;Casandra Rau&quot;,
            &quot;adress&quot;: &quot;675 Adolphus Stravenue Apt. 881\nKuphaltown, CA 24603&quot;,
            &quot;mobile_number&quot;: &quot;+1 (540) 236-6852&quot;,
            &quot;year_of_birth&quot;: &quot;2013&quot;,
            &quot;ecocash_number&quot;: 110022211,
            &quot;lumicash_number&quot;: 110022211,
            &quot;bank_name&quot;: &quot;Legros Locks&quot;,
            &quot;bank_account_number&quot;: 5657964,
            &quot;story&quot;: &quot;Quia culpa blanditiis et tempora possimus impedit. Consequuntur hic sapiente dicta ducimus illum. Ex repudiandae magnam eius aliquid est sint et.&quot;,
            &quot;needed_money&quot;: 160578,
            &quot;state_of_health&quot;: &quot;bad&quot;,
            &quot;images&quot;: {
                &quot;main_image&quot;: &quot;https://via.placeholder.com/640x480.png/001188?text=consequuntur&quot;,
                &quot;first_primary_image&quot;: &quot;https://via.placeholder.com/640x480.png/007799?text=nostrum&quot;,
                &quot;second_primary_image&quot;: &quot;https://via.placeholder.com/640x480.png/00eecc?text=quia&quot;
            },
            &quot;donation_status&quot;: &quot;en cours&quot;,
            &quot;user&quot;: 9,
            &quot;family_situation&quot;: &quot;orphelins&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-handicaps" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-handicaps"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-handicaps"></code></pre>
</span>
<span id="execution-error-GETapi-handicaps" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-handicaps"></code></pre>
</span>
<form id="form-GETapi-handicaps" data-method="GET"
      data-path="api/handicaps"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-handicaps', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-handicaps"
                    onclick="tryItOut('GETapi-handicaps');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-handicaps"
                    onclick="cancelTryOut('GETapi-handicaps');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-handicaps" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/handicaps</code></b>
        </p>
                <p>
            <label id="auth-GETapi-handicaps" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-handicaps"
                                                                data-component="header"></label>
        </p>
                </form>

            <h2 id="handicap-management-endpoints-POSTapi-handicaps">add new handicap in the database</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>call this endpoint to store new handicap based on the given data</p>

<span id="example-requests-POSTapi-handicaps">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "helpus.test/api/handicaps" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"fullname\": \"perspiciatis\",
    \"adress\": \"perspiciatis\",
    \"mobile_number\": \"eum\",
    \"year_of_birth\": 9,
    \"ecocash_number\": 5,
    \"lumitel_number\": 12,
    \"bank_name\": \"quo\",
    \"bank_account_number\": \"autem\",
    \"story\": \"perspiciatis\",
    \"needed_money\": 18,
    \"state_of_health\": \"qui\",
    \"main_image\": \"quam\",
    \"first_primary_image\": \"quasi\",
    \"second_primary_image\": \"eos\",
    \"donation_status\": \"rerum\",
    \"user_id\": 19,
    \"family_situation\": \"nisi\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "helpus.test/api/handicaps"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "fullname": "perspiciatis",
    "adress": "perspiciatis",
    "mobile_number": "eum",
    "year_of_birth": 9,
    "ecocash_number": 5,
    "lumitel_number": 12,
    "bank_name": "quo",
    "bank_account_number": "autem",
    "story": "perspiciatis",
    "needed_money": 18,
    "state_of_health": "qui",
    "main_image": "quam",
    "first_primary_image": "quasi",
    "second_primary_image": "eos",
    "donation_status": "rerum",
    "user_id": 19,
    "family_situation": "nisi"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-handicaps">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json">{'status' =&gt; 'ok',
      'data' =&gt; [
           'message' =&gt; 'handicap created successfuly'
     ]}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-handicaps" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-handicaps"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-handicaps"></code></pre>
</span>
<span id="execution-error-POSTapi-handicaps" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-handicaps"></code></pre>
</span>
<form id="form-POSTapi-handicaps" data-method="POST"
      data-path="api/handicaps"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-handicaps', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-handicaps"
                    onclick="tryItOut('POSTapi-handicaps');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-handicaps"
                    onclick="cancelTryOut('POSTapi-handicaps');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-handicaps" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/handicaps</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-handicaps" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-handicaps"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>fullname</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="fullname"
               data-endpoint="POSTapi-handicaps"
               value="perspiciatis"
               data-component="body" hidden>
    <br>
<p>the fullname of the handicap</p>
        </p>
                <p>
            <b><code>adress</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="adress"
               data-endpoint="POSTapi-handicaps"
               value="perspiciatis"
               data-component="body" hidden>
    <br>
<p>the adress of the handicap</p>
        </p>
                <p>
            <b><code>mobile_number</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="mobile_number"
               data-endpoint="POSTapi-handicaps"
               value="eum"
               data-component="body" hidden>
    <br>
<p>the mobile number of the handicap or his host</p>
        </p>
                <p>
            <b><code>year_of_birth</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="year_of_birth"
               data-endpoint="POSTapi-handicaps"
               value="9"
               data-component="body" hidden>
    <br>
<p>the year of birth for the handicap</p>
        </p>
                <p>
            <b><code>ecocash_number</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="ecocash_number"
               data-endpoint="POSTapi-handicaps"
               value="5"
               data-component="body" hidden>
    <br>
<p>the ecocash number of the handicap</p>
        </p>
                <p>
            <b><code>lumitel_number</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="lumitel_number"
               data-endpoint="POSTapi-handicaps"
               value="12"
               data-component="body" hidden>
    <br>
<p>the lumicash number of the handicap</p>
        </p>
                <p>
            <b><code>bank_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="bank_name"
               data-endpoint="POSTapi-handicaps"
               value="quo"
               data-component="body" hidden>
    <br>
<p>the name of the bank used by the handicap</p>
        </p>
                <p>
            <b><code>bank_account_number</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="bank_account_number"
               data-endpoint="POSTapi-handicaps"
               value="autem"
               data-component="body" hidden>
    <br>
<p>the number of the bank account used by the handicap</p>
        </p>
                <p>
            <b><code>story</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="story"
               data-endpoint="POSTapi-handicaps"
               value="perspiciatis"
               data-component="body" hidden>
    <br>
<p>the story of the handicap</p>
        </p>
                <p>
            <b><code>needed_money</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="needed_money"
               data-endpoint="POSTapi-handicaps"
               value="18"
               data-component="body" hidden>
    <br>
<p>the amount of money for the operation</p>
        </p>
                <p>
            <b><code>state_of_health</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="state_of_health"
               data-endpoint="POSTapi-handicaps"
               value="qui"
               data-component="body" hidden>
    <br>
<p>the health of the patient can take those values (simple, bad, worst)</p>
        </p>
                <p>
            <b><code>main_image</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="main_image"
               data-endpoint="POSTapi-handicaps"
               value="quam"
               data-component="body" hidden>
    <br>
<p>the most important picture of the handicap</p>
        </p>
                <p>
            <b><code>first_primary_image</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="first_primary_image"
               data-endpoint="POSTapi-handicaps"
               value="quasi"
               data-component="body" hidden>
    <br>
<p>just another picture of the handicap</p>
        </p>
                <p>
            <b><code>second_primary_image</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="second_primary_image"
               data-endpoint="POSTapi-handicaps"
               value="eos"
               data-component="body" hidden>
    <br>
<p>just another picture of the handicap the second one</p>
        </p>
                <p>
            <b><code>donation_status</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="donation_status"
               data-endpoint="POSTapi-handicaps"
               value="rerum"
               data-component="body" hidden>
    <br>
<p>just the status of the donation process (not started, in progress, done)</p>
        </p>
                <p>
            <b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="user_id"
               data-endpoint="POSTapi-handicaps"
               value="19"
               data-component="body" hidden>
    <br>
<p>the id of the user who gonna add the handicap</p>
        </p>
                <p>
            <b><code>family_situation</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="family_situation"
               data-endpoint="POSTapi-handicaps"
               value="nisi"
               data-component="body" hidden>
    <br>
<p>the state of his familly situation (orphans or with parents)</p>
        </p>
        </form>

            <h2 id="handicap-management-endpoints-GETapi-handicaps--id-">show one handicap</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>returns one handicap found using the id provided in the request query</p>

<span id="example-requests-GETapi-handicaps--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "helpus.test/api/handicaps/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "helpus.test/api/handicaps/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-handicaps--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;fullname&quot;: &quot;Cecil Bayer&quot;,
        &quot;adress&quot;: &quot;792 Marquardt Freeway Apt. 473\nWest Sigrid, AL 07763&quot;,
        &quot;mobile_number&quot;: &quot;1-551-549-3241&quot;,
        &quot;year_of_birth&quot;: &quot;1976&quot;,
        &quot;ecocash_number&quot;: 110022211,
        &quot;lumicash_number&quot;: 110022211,
        &quot;bank_name&quot;: &quot;Pedro Way&quot;,
        &quot;bank_account_number&quot;: 6993384,
        &quot;story&quot;: &quot;Corporis qui quia explicabo rerum id fuga vel. Sint quibusdam quo neque.&quot;,
        &quot;needed_money&quot;: 2787138,
        &quot;state_of_health&quot;: &quot;bad&quot;,
        &quot;images&quot;: {
            &quot;main_image&quot;: &quot;https://via.placeholder.com/640x480.png/0066aa?text=ut&quot;,
            &quot;first_primary_image&quot;: &quot;https://via.placeholder.com/640x480.png/0044dd?text=ut&quot;,
            &quot;second_primary_image&quot;: &quot;https://via.placeholder.com/640x480.png/008822?text=dolores&quot;
        },
        &quot;donation_status&quot;: &quot;en cours&quot;,
        &quot;user&quot;: 7,
        &quot;family_situation&quot;: &quot;orphelins&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-handicaps--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-handicaps--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-handicaps--id-"></code></pre>
</span>
<span id="execution-error-GETapi-handicaps--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-handicaps--id-"></code></pre>
</span>
<form id="form-GETapi-handicaps--id-" data-method="GET"
      data-path="api/handicaps/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-handicaps--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-handicaps--id-"
                    onclick="tryItOut('GETapi-handicaps--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-handicaps--id-"
                    onclick="cancelTryOut('GETapi-handicaps--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-handicaps--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/handicaps/{id}</code></b>
        </p>
                <p>
            <label id="auth-GETapi-handicaps--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-handicaps--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-handicaps--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the handicap.</p>
            </p>
                    </form>

            <h2 id="handicap-management-endpoints-PUTapi-handicaps--id-">Update the handicap</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>update the handicap related data</p>

<span id="example-requests-PUTapi-handicaps--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "helpus.test/api/handicaps/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"fullname\": \"cupiditate\",
    \"adress\": \"aspernatur\",
    \"mobile_number\": \"voluptatem\",
    \"year_of_birth\": 1,
    \"ecocash_number\": 5,
    \"lumitel_number\": 8,
    \"bank_name\": \"provident\",
    \"bank_account_number\": \"nulla\",
    \"story\": \"nobis\",
    \"needed_money\": 6,
    \"state_of_health\": \"placeat\",
    \"main_image\": \"qui\",
    \"first_primary_image\": \"soluta\",
    \"second_primary_image\": \"rerum\",
    \"donation_status\": \"et\",
    \"user_id\": 9,
    \"family_situation\": \"sapiente\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "helpus.test/api/handicaps/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "fullname": "cupiditate",
    "adress": "aspernatur",
    "mobile_number": "voluptatem",
    "year_of_birth": 1,
    "ecocash_number": 5,
    "lumitel_number": 8,
    "bank_name": "provident",
    "bank_account_number": "nulla",
    "story": "nobis",
    "needed_money": 6,
    "state_of_health": "placeat",
    "main_image": "qui",
    "first_primary_image": "soluta",
    "second_primary_image": "rerum",
    "donation_status": "et",
    "user_id": 9,
    "family_situation": "sapiente"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-handicaps--id-">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json">{'status' =&gt; 'ok',
      'data' =&gt; [
           'message' =&gt; 'successfuly updated the handicap data'
     ]}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-handicaps--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-handicaps--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-handicaps--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-handicaps--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-handicaps--id-"></code></pre>
</span>
<form id="form-PUTapi-handicaps--id-" data-method="PUT"
      data-path="api/handicaps/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-handicaps--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-handicaps--id-"
                    onclick="tryItOut('PUTapi-handicaps--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-handicaps--id-"
                    onclick="cancelTryOut('PUTapi-handicaps--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-handicaps--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/handicaps/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/handicaps/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-handicaps--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-handicaps--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-handicaps--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the handicap.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>fullname</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="fullname"
               data-endpoint="PUTapi-handicaps--id-"
               value="cupiditate"
               data-component="body" hidden>
    <br>
<p>the fullname of the handicap</p>
        </p>
                <p>
            <b><code>adress</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="adress"
               data-endpoint="PUTapi-handicaps--id-"
               value="aspernatur"
               data-component="body" hidden>
    <br>
<p>the adress of the handicap</p>
        </p>
                <p>
            <b><code>mobile_number</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="mobile_number"
               data-endpoint="PUTapi-handicaps--id-"
               value="voluptatem"
               data-component="body" hidden>
    <br>
<p>the mobile number of the handicap or his host</p>
        </p>
                <p>
            <b><code>year_of_birth</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="year_of_birth"
               data-endpoint="PUTapi-handicaps--id-"
               value="1"
               data-component="body" hidden>
    <br>
<p>the year of birth for the handicap</p>
        </p>
                <p>
            <b><code>ecocash_number</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="ecocash_number"
               data-endpoint="PUTapi-handicaps--id-"
               value="5"
               data-component="body" hidden>
    <br>
<p>the ecocash number of the handicap</p>
        </p>
                <p>
            <b><code>lumitel_number</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="lumitel_number"
               data-endpoint="PUTapi-handicaps--id-"
               value="8"
               data-component="body" hidden>
    <br>
<p>the lumicash number of the handicap</p>
        </p>
                <p>
            <b><code>bank_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="bank_name"
               data-endpoint="PUTapi-handicaps--id-"
               value="provident"
               data-component="body" hidden>
    <br>
<p>the name of the bank used by the handicap</p>
        </p>
                <p>
            <b><code>bank_account_number</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="bank_account_number"
               data-endpoint="PUTapi-handicaps--id-"
               value="nulla"
               data-component="body" hidden>
    <br>
<p>the number of the bank account used by the handicap</p>
        </p>
                <p>
            <b><code>story</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="story"
               data-endpoint="PUTapi-handicaps--id-"
               value="nobis"
               data-component="body" hidden>
    <br>
<p>the story of the handicap</p>
        </p>
                <p>
            <b><code>needed_money</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="needed_money"
               data-endpoint="PUTapi-handicaps--id-"
               value="6"
               data-component="body" hidden>
    <br>
<p>the amount of money for the operation</p>
        </p>
                <p>
            <b><code>state_of_health</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="state_of_health"
               data-endpoint="PUTapi-handicaps--id-"
               value="placeat"
               data-component="body" hidden>
    <br>
<p>the health of the patient can take those values (simple, bad, worst)</p>
        </p>
                <p>
            <b><code>main_image</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="main_image"
               data-endpoint="PUTapi-handicaps--id-"
               value="qui"
               data-component="body" hidden>
    <br>
<p>the most important picture of the handicap</p>
        </p>
                <p>
            <b><code>first_primary_image</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="first_primary_image"
               data-endpoint="PUTapi-handicaps--id-"
               value="soluta"
               data-component="body" hidden>
    <br>
<p>just another picture of the handicap</p>
        </p>
                <p>
            <b><code>second_primary_image</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="second_primary_image"
               data-endpoint="PUTapi-handicaps--id-"
               value="rerum"
               data-component="body" hidden>
    <br>
<p>just another picture of the handicap the second one</p>
        </p>
                <p>
            <b><code>donation_status</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="donation_status"
               data-endpoint="PUTapi-handicaps--id-"
               value="et"
               data-component="body" hidden>
    <br>
<p>just the status of the donation process (not started, in progress, done)</p>
        </p>
                <p>
            <b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="user_id"
               data-endpoint="PUTapi-handicaps--id-"
               value="9"
               data-component="body" hidden>
    <br>
<p>the id of the user who gonna add the handicap</p>
        </p>
                <p>
            <b><code>family_situation</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="family_situation"
               data-endpoint="PUTapi-handicaps--id-"
               value="sapiente"
               data-component="body" hidden>
    <br>
<p>the state of his familly situation (orphans or with parents)</p>
        </p>
        </form>

            <h2 id="handicap-management-endpoints-DELETEapi-handicaps--id-">delete the handicap data</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>delete the handicap data from the database</p>

<span id="example-requests-DELETEapi-handicaps--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "helpus.test/api/handicaps/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "helpus.test/api/handicaps/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-handicaps--id-">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json">{'status' =&gt; 'ok',
      'data' =&gt; [
           'message' =&gt; 'successfuly deleted the handicap data'
     ]}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-handicaps--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-handicaps--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-handicaps--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-handicaps--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-handicaps--id-"></code></pre>
</span>
<form id="form-DELETEapi-handicaps--id-" data-method="DELETE"
      data-path="api/handicaps/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-handicaps--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-handicaps--id-"
                    onclick="tryItOut('DELETEapi-handicaps--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-handicaps--id-"
                    onclick="cancelTryOut('DELETEapi-handicaps--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-handicaps--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/handicaps/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-handicaps--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-handicaps--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-handicaps--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the handicap.</p>
            </p>
                    </form>

    

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
