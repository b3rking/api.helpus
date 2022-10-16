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
        var baseUrl = "http://localhost";
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
        <li>Last updated: October 11 2022</li>
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
    --get "http://localhost/api/roles" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/roles"
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
            &quot;name&quot;: &quot;Child Care Worker&quot;,
            &quot;user_id&quot;: 4,
            &quot;updated_at&quot;: &quot;2022-10-11T08:40:19.000000Z&quot;,
            &quot;created_at&quot;: &quot;2022-10-11T08:40:19.000000Z&quot;,
            &quot;id&quot;: 3
        },
        {
            &quot;name&quot;: &quot;Home Health Aide&quot;,
            &quot;user_id&quot;: 2,
            &quot;updated_at&quot;: &quot;2022-10-11T08:40:19.000000Z&quot;,
            &quot;created_at&quot;: &quot;2022-10-11T08:40:19.000000Z&quot;,
            &quot;id&quot;: 4
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
    "http://localhost/api/roles" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"suscipit\",
    \"user_id\": 1
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/roles"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "suscipit",
    "user_id": 1
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

<code class="language-json">{'success' =&gt; 'true',
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
               value="suscipit"
               data-component="body" hidden>
    <br>
<p>the name of the role</p>
        </p>
                <p>
            <b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="user_id"
               data-endpoint="POSTapi-roles"
               value="1"
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
    --get "http://localhost/api/roles/8" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/roles/8"
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
        &quot;name&quot;: &quot;Makeup Artists&quot;,
        &quot;user_id&quot;: 2,
        &quot;updated_at&quot;: &quot;2022-10-11T08:40:19.000000Z&quot;,
        &quot;created_at&quot;: &quot;2022-10-11T08:40:19.000000Z&quot;,
        &quot;id&quot;: 5
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
               value="8"
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
    "http://localhost/api/roles/14" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"qui\",
    \"user_id\": 3
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/roles/14"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "qui",
    "user_id": 3
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

<code class="language-json">{'success' =&gt; 'true',
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
               value="14"
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
               value="qui"
               data-component="body" hidden>
    <br>
<p>the name of the role</p>
        </p>
                <p>
            <b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="user_id"
               data-endpoint="PUTapi-roles--id-"
               value="3"
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
    "http://localhost/api/roles/9" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/roles/9"
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

<code class="language-json">{'success' =&gt; 'true',
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
               value="9"
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
    --get "http://localhost/api/users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users"
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
            &quot;id&quot;: 11,
            &quot;fullname&quot;: &quot;Ernie Pfeffer&quot;,
            &quot;username&quot;: &quot;Manley&quot;,
            &quot;role&quot;: &quot;Building Cleaning Worker&quot;,
            &quot;adress&quot;: &quot;985 Ward Shoal Apt. 802\nPort Marina, CO 96684-1757&quot;,
            &quot;number&quot;: 75825108,
            &quot;avatar&quot;: &quot;https://via.placeholder.com/640x480.png/00ff44?text=+dolores&quot;
        },
        {
            &quot;id&quot;: 12,
            &quot;fullname&quot;: &quot;Emilia Stoltenberg&quot;,
            &quot;username&quot;: &quot;Kim&quot;,
            &quot;role&quot;: &quot;Food Preparation and Serving Worker&quot;,
            &quot;adress&quot;: &quot;105 Arlo Springs\nNew Laverna, PA 49156&quot;,
            &quot;number&quot;: 79004147,
            &quot;avatar&quot;: &quot;https://via.placeholder.com/640x480.png/00dd44?text=+saepe&quot;
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
    "http://localhost/api/users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"fullname\": \"impedit\",
    \"username\": \"consectetur\",
    \"password\": \"vel\",
    \"role_id\": 10,
    \"adress\": \"accusantium\",
    \"number\": 6,
    \"avatar\": \"ratione\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "fullname": "impedit",
    "username": "consectetur",
    "password": "vel",
    "role_id": 10,
    "adress": "accusantium",
    "number": 6,
    "avatar": "ratione"
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
      'success' =&gt; 'true',
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
               value="impedit"
               data-component="body" hidden>
    <br>
<p>this user fullname</p>
        </p>
                <p>
            <b><code>username</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="username"
               data-endpoint="POSTapi-users"
               value="consectetur"
               data-component="body" hidden>
    <br>
<p>this user username</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-users"
               value="vel"
               data-component="body" hidden>
    <br>
<p>this user role in the system</p>
        </p>
                <p>
            <b><code>role_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="role_id"
               data-endpoint="POSTapi-users"
               value="10"
               data-component="body" hidden>
    <br>
<p>this user role in the system</p>
        </p>
                <p>
            <b><code>adress</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="adress"
               data-endpoint="POSTapi-users"
               value="accusantium"
               data-component="body" hidden>
    <br>
<p>this user adress</p>
        </p>
                <p>
            <b><code>number</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="number"
               data-endpoint="POSTapi-users"
               value="6"
               data-component="body" hidden>
    <br>
<p>this user mobile number</p>
        </p>
                <p>
            <b><code>avatar</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="avatar"
               data-endpoint="POSTapi-users"
               value="ratione"
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
    --get "http://localhost/api/users/4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users/4"
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
        &quot;id&quot;: 13,
        &quot;fullname&quot;: &quot;Mr. Giuseppe Dicki DDS&quot;,
        &quot;username&quot;: &quot;Dawson&quot;,
        &quot;role&quot;: &quot;Food Preparation and Serving Worker&quot;,
        &quot;adress&quot;: &quot;5158 Sawayn Inlet Suite 212\nEast Aileen, NE 19296-7408&quot;,
        &quot;number&quot;: 70424282,
        &quot;avatar&quot;: &quot;https://via.placeholder.com/640x480.png/00aabb?text=+ut&quot;
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
    "http://localhost/api/users/15" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"fullname\": \"dolorem\",
    \"username\": \"qui\",
    \"password\": \"iusto\",
    \"role_id\": 8,
    \"adress\": \"dolorum\",
    \"number\": 6,
    \"avatar\": \"aut\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users/15"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "fullname": "dolorem",
    "username": "qui",
    "password": "iusto",
    "role_id": 8,
    "adress": "dolorum",
    "number": 6,
    "avatar": "aut"
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
      'success' =&gt; 'true',
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
               value="15"
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
               value="dolorem"
               data-component="body" hidden>
    <br>
<p>this user fullname</p>
        </p>
                <p>
            <b><code>username</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="username"
               data-endpoint="PUTapi-users--id-"
               value="qui"
               data-component="body" hidden>
    <br>
<p>this user username</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="PUTapi-users--id-"
               value="iusto"
               data-component="body" hidden>
    <br>
<p>this user role in the system</p>
        </p>
                <p>
            <b><code>role_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="role_id"
               data-endpoint="PUTapi-users--id-"
               value="8"
               data-component="body" hidden>
    <br>
<p>this user role in the system</p>
        </p>
                <p>
            <b><code>adress</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="adress"
               data-endpoint="PUTapi-users--id-"
               value="dolorum"
               data-component="body" hidden>
    <br>
<p>this user adress</p>
        </p>
                <p>
            <b><code>number</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="number"
               data-endpoint="PUTapi-users--id-"
               value="6"
               data-component="body" hidden>
    <br>
<p>this user mobile number</p>
        </p>
                <p>
            <b><code>avatar</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="avatar"
               data-endpoint="PUTapi-users--id-"
               value="aut"
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
    "http://localhost/api/users/11" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users/11"
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
      'success' =&gt; 'true',
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
               value="11"
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
    --get "http://localhost/api/handicaps" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/handicaps"
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
            &quot;id&quot;: 16,
            &quot;fullname&quot;: &quot;Dr. Alexandre Feest V&quot;,
            &quot;adress&quot;: &quot;8422 Prosacco Circle Apt. 318\nPort Buckport, IA 80576&quot;,
            &quot;mobile_number&quot;: &quot;1-408-973-9723&quot;,
            &quot;year_of_birth&quot;: &quot;2021&quot;,
            &quot;ecocash_number&quot;: 110022211,
            &quot;lumicash_number&quot;: 110022211,
            &quot;bank_name&quot;: &quot;Rolfson Coves&quot;,
            &quot;bank_account_number&quot;: 6844845,
            &quot;story&quot;: &quot;Odit temporibus non dolorem provident dolor. Cupiditate omnis libero numquam quidem nesciunt quas modi. Aperiam voluptatem repudiandae enim ea et reiciendis.&quot;,
            &quot;needed_money&quot;: 3233033,
            &quot;state_of_health&quot;: &quot;bad&quot;,
            &quot;images&quot;: {
                &quot;main_image&quot;: &quot;https://via.placeholder.com/640x480.png/00ccaa?text=molestias&quot;,
                &quot;first_primary_image&quot;: &quot;https://via.placeholder.com/640x480.png/00ffee?text=cum&quot;,
                &quot;second_primary_image&quot;: &quot;https://via.placeholder.com/640x480.png/006622?text=ut&quot;
            },
            &quot;donation_status&quot;: &quot;en cours&quot;,
            &quot;user&quot;: 3,
            &quot;family_situation&quot;: &quot;orphelins&quot;
        },
        {
            &quot;id&quot;: 17,
            &quot;fullname&quot;: &quot;Enola O'Connell&quot;,
            &quot;adress&quot;: &quot;468 Dicki Trail\nNorth Alanaborough, IN 07703-8148&quot;,
            &quot;mobile_number&quot;: &quot;+18083970708&quot;,
            &quot;year_of_birth&quot;: &quot;2001&quot;,
            &quot;ecocash_number&quot;: 110022211,
            &quot;lumicash_number&quot;: 110022211,
            &quot;bank_name&quot;: &quot;Pablo Run&quot;,
            &quot;bank_account_number&quot;: 5633246,
            &quot;story&quot;: &quot;Sunt placeat dolor labore culpa. Fugiat esse ducimus architecto placeat ut nihil. Qui vero placeat rerum.&quot;,
            &quot;needed_money&quot;: 3549525,
            &quot;state_of_health&quot;: &quot;bad&quot;,
            &quot;images&quot;: {
                &quot;main_image&quot;: &quot;https://via.placeholder.com/640x480.png/00cc77?text=ullam&quot;,
                &quot;first_primary_image&quot;: &quot;https://via.placeholder.com/640x480.png/00bb99?text=amet&quot;,
                &quot;second_primary_image&quot;: &quot;https://via.placeholder.com/640x480.png/00eebb?text=architecto&quot;
            },
            &quot;donation_status&quot;: &quot;en cours&quot;,
            &quot;user&quot;: 10,
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
    "http://localhost/api/handicaps" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"fullname\": \"aut\",
    \"adress\": \"voluptas\",
    \"mobile_number\": \"corrupti\",
    \"year_of_birth\": 6,
    \"ecocash_number\": 1,
    \"lumicash_number\": \"dni\",
    \"bank_name\": \"porro\",
    \"bank_account_number\": \"et\",
    \"story\": \"quia\",
    \"needed_money\": 10,
    \"state_of_health\": \"ut\",
    \"main_image\": \"minus\",
    \"first_primary_image\": \"aperiam\",
    \"second_primary_image\": \"ut\",
    \"user_id\": 8,
    \"family_situation\": \"dolorem\",
    \"lumitel_number\": 1,
    \"donation_status\": \"sed\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/handicaps"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "fullname": "aut",
    "adress": "voluptas",
    "mobile_number": "corrupti",
    "year_of_birth": 6,
    "ecocash_number": 1,
    "lumicash_number": "dni",
    "bank_name": "porro",
    "bank_account_number": "et",
    "story": "quia",
    "needed_money": 10,
    "state_of_health": "ut",
    "main_image": "minus",
    "first_primary_image": "aperiam",
    "second_primary_image": "ut",
    "user_id": 8,
    "family_situation": "dolorem",
    "lumitel_number": 1,
    "donation_status": "sed"
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

<code class="language-json">{'success' =&gt; 'true',
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
               value="aut"
               data-component="body" hidden>
    <br>
<p>the fullname of the handicap</p>
        </p>
                <p>
            <b><code>adress</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="adress"
               data-endpoint="POSTapi-handicaps"
               value="voluptas"
               data-component="body" hidden>
    <br>
<p>the adress of the handicap</p>
        </p>
                <p>
            <b><code>mobile_number</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="mobile_number"
               data-endpoint="POSTapi-handicaps"
               value="corrupti"
               data-component="body" hidden>
    <br>
<p>the mobile number of the handicap or his host</p>
        </p>
                <p>
            <b><code>year_of_birth</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="year_of_birth"
               data-endpoint="POSTapi-handicaps"
               value="6"
               data-component="body" hidden>
    <br>
<p>the year of birth for the handicap</p>
        </p>
                <p>
            <b><code>ecocash_number</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="ecocash_number"
               data-endpoint="POSTapi-handicaps"
               value="1"
               data-component="body" hidden>
    <br>
<p>the ecocash number of the handicap</p>
        </p>
                <p>
            <b><code>lumicash_number</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="lumicash_number"
               data-endpoint="POSTapi-handicaps"
               value="dni"
               data-component="body" hidden>
    <br>
<p>Must be at least 6 characters.</p>
        </p>
                <p>
            <b><code>bank_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="bank_name"
               data-endpoint="POSTapi-handicaps"
               value="porro"
               data-component="body" hidden>
    <br>
<p>the name of the bank used by the handicap</p>
        </p>
                <p>
            <b><code>bank_account_number</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="bank_account_number"
               data-endpoint="POSTapi-handicaps"
               value="et"
               data-component="body" hidden>
    <br>
<p>the number of the bank account used by the handicap</p>
        </p>
                <p>
            <b><code>story</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="story"
               data-endpoint="POSTapi-handicaps"
               value="quia"
               data-component="body" hidden>
    <br>
<p>the story of the handicap</p>
        </p>
                <p>
            <b><code>needed_money</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="needed_money"
               data-endpoint="POSTapi-handicaps"
               value="10"
               data-component="body" hidden>
    <br>
<p>the amount of money for the operation</p>
        </p>
                <p>
            <b><code>state_of_health</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="state_of_health"
               data-endpoint="POSTapi-handicaps"
               value="ut"
               data-component="body" hidden>
    <br>
<p>the health of the patient can take those values (simple, bad, worst)</p>
        </p>
                <p>
            <b><code>main_image</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="main_image"
               data-endpoint="POSTapi-handicaps"
               value="minus"
               data-component="body" hidden>
    <br>
<p>the most important picture of the handicap</p>
        </p>
                <p>
            <b><code>first_primary_image</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="first_primary_image"
               data-endpoint="POSTapi-handicaps"
               value="aperiam"
               data-component="body" hidden>
    <br>
<p>just another picture of the handicap</p>
        </p>
                <p>
            <b><code>second_primary_image</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="second_primary_image"
               data-endpoint="POSTapi-handicaps"
               value="ut"
               data-component="body" hidden>
    <br>
<p>just another picture of the handicap the second one</p>
        </p>
                <p>
            <b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="user_id"
               data-endpoint="POSTapi-handicaps"
               value="8"
               data-component="body" hidden>
    <br>
<p>the id of the user who gonna add the handicap</p>
        </p>
                <p>
            <b><code>family_situation</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="family_situation"
               data-endpoint="POSTapi-handicaps"
               value="dolorem"
               data-component="body" hidden>
    <br>
<p>the state of his familly situation (orphans or with parents)</p>
        </p>
                <p>
            <b><code>lumitel_number</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="lumitel_number"
               data-endpoint="POSTapi-handicaps"
               value="1"
               data-component="body" hidden>
    <br>
<p>the lumicash number of the handicap</p>
        </p>
                <p>
            <b><code>donation_status</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="donation_status"
               data-endpoint="POSTapi-handicaps"
               value="sed"
               data-component="body" hidden>
    <br>
<p>just the status of the donation process (not started, in progress, done)</p>
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
    --get "http://localhost/api/handicaps/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/handicaps/1"
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
        &quot;id&quot;: 18,
        &quot;fullname&quot;: &quot;Genevieve Hahn&quot;,
        &quot;adress&quot;: &quot;283 McDermott Springs Apt. 852\nMcKenziehaven, TX 68216-6351&quot;,
        &quot;mobile_number&quot;: &quot;+1-747-857-8073&quot;,
        &quot;year_of_birth&quot;: &quot;2002&quot;,
        &quot;ecocash_number&quot;: 110022211,
        &quot;lumicash_number&quot;: 110022211,
        &quot;bank_name&quot;: &quot;Gaylord Locks&quot;,
        &quot;bank_account_number&quot;: 6486774,
        &quot;story&quot;: &quot;Omnis eveniet harum dicta quasi est assumenda optio. Reiciendis et praesentium ab molestiae. Dolor quos delectus distinctio non ut inventore unde. Rerum consequatur consequuntur quia porro.&quot;,
        &quot;needed_money&quot;: 3182255,
        &quot;state_of_health&quot;: &quot;bad&quot;,
        &quot;images&quot;: {
            &quot;main_image&quot;: &quot;https://via.placeholder.com/640x480.png/0022aa?text=hic&quot;,
            &quot;first_primary_image&quot;: &quot;https://via.placeholder.com/640x480.png/0000ee?text=accusantium&quot;,
            &quot;second_primary_image&quot;: &quot;https://via.placeholder.com/640x480.png/002233?text=autem&quot;
        },
        &quot;donation_status&quot;: &quot;en cours&quot;,
        &quot;user&quot;: 9,
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
    "http://localhost/api/handicaps/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"fullname\": \"ut\",
    \"adress\": \"aut\",
    \"mobile_number\": \"fuga\",
    \"year_of_birth\": 5,
    \"ecocash_number\": 13,
    \"lumicash_number\": \"mj\",
    \"bank_name\": \"quod\",
    \"bank_account_number\": \"quidem\",
    \"story\": \"cumque\",
    \"needed_money\": 1,
    \"state_of_health\": \"accusamus\",
    \"main_image\": \"aut\",
    \"first_primary_image\": \"fuga\",
    \"second_primary_image\": \"veniam\",
    \"user_id\": 5,
    \"family_situation\": \"et\",
    \"lumitel_number\": 3,
    \"donation_status\": \"rerum\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/handicaps/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "fullname": "ut",
    "adress": "aut",
    "mobile_number": "fuga",
    "year_of_birth": 5,
    "ecocash_number": 13,
    "lumicash_number": "mj",
    "bank_name": "quod",
    "bank_account_number": "quidem",
    "story": "cumque",
    "needed_money": 1,
    "state_of_health": "accusamus",
    "main_image": "aut",
    "first_primary_image": "fuga",
    "second_primary_image": "veniam",
    "user_id": 5,
    "family_situation": "et",
    "lumitel_number": 3,
    "donation_status": "rerum"
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

<code class="language-json">{'success' =&gt; 'true',
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
               value="ut"
               data-component="body" hidden>
    <br>
<p>the fullname of the handicap</p>
        </p>
                <p>
            <b><code>adress</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="adress"
               data-endpoint="PUTapi-handicaps--id-"
               value="aut"
               data-component="body" hidden>
    <br>
<p>the adress of the handicap</p>
        </p>
                <p>
            <b><code>mobile_number</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="mobile_number"
               data-endpoint="PUTapi-handicaps--id-"
               value="fuga"
               data-component="body" hidden>
    <br>
<p>the mobile number of the handicap or his host</p>
        </p>
                <p>
            <b><code>year_of_birth</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="year_of_birth"
               data-endpoint="PUTapi-handicaps--id-"
               value="5"
               data-component="body" hidden>
    <br>
<p>the year of birth for the handicap</p>
        </p>
                <p>
            <b><code>ecocash_number</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="ecocash_number"
               data-endpoint="PUTapi-handicaps--id-"
               value="13"
               data-component="body" hidden>
    <br>
<p>the ecocash number of the handicap</p>
        </p>
                <p>
            <b><code>lumicash_number</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="lumicash_number"
               data-endpoint="PUTapi-handicaps--id-"
               value="mj"
               data-component="body" hidden>
    <br>
<p>Must be at least 6 characters.</p>
        </p>
                <p>
            <b><code>bank_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="bank_name"
               data-endpoint="PUTapi-handicaps--id-"
               value="quod"
               data-component="body" hidden>
    <br>
<p>the name of the bank used by the handicap</p>
        </p>
                <p>
            <b><code>bank_account_number</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="bank_account_number"
               data-endpoint="PUTapi-handicaps--id-"
               value="quidem"
               data-component="body" hidden>
    <br>
<p>the number of the bank account used by the handicap</p>
        </p>
                <p>
            <b><code>story</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="story"
               data-endpoint="PUTapi-handicaps--id-"
               value="cumque"
               data-component="body" hidden>
    <br>
<p>the story of the handicap</p>
        </p>
                <p>
            <b><code>needed_money</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="needed_money"
               data-endpoint="PUTapi-handicaps--id-"
               value="1"
               data-component="body" hidden>
    <br>
<p>the amount of money for the operation</p>
        </p>
                <p>
            <b><code>state_of_health</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="state_of_health"
               data-endpoint="PUTapi-handicaps--id-"
               value="accusamus"
               data-component="body" hidden>
    <br>
<p>the health of the patient can take those values (simple, bad, worst)</p>
        </p>
                <p>
            <b><code>main_image</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="main_image"
               data-endpoint="PUTapi-handicaps--id-"
               value="aut"
               data-component="body" hidden>
    <br>
<p>the most important picture of the handicap</p>
        </p>
                <p>
            <b><code>first_primary_image</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="first_primary_image"
               data-endpoint="PUTapi-handicaps--id-"
               value="fuga"
               data-component="body" hidden>
    <br>
<p>just another picture of the handicap</p>
        </p>
                <p>
            <b><code>second_primary_image</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="second_primary_image"
               data-endpoint="PUTapi-handicaps--id-"
               value="veniam"
               data-component="body" hidden>
    <br>
<p>just another picture of the handicap the second one</p>
        </p>
                <p>
            <b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="user_id"
               data-endpoint="PUTapi-handicaps--id-"
               value="5"
               data-component="body" hidden>
    <br>
<p>the id of the user who gonna add the handicap</p>
        </p>
                <p>
            <b><code>family_situation</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="family_situation"
               data-endpoint="PUTapi-handicaps--id-"
               value="et"
               data-component="body" hidden>
    <br>
<p>the state of his familly situation (orphans or with parents)</p>
        </p>
                <p>
            <b><code>lumitel_number</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="lumitel_number"
               data-endpoint="PUTapi-handicaps--id-"
               value="3"
               data-component="body" hidden>
    <br>
<p>the lumicash number of the handicap</p>
        </p>
                <p>
            <b><code>donation_status</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="donation_status"
               data-endpoint="PUTapi-handicaps--id-"
               value="rerum"
               data-component="body" hidden>
    <br>
<p>just the status of the donation process (not started, in progress, done)</p>
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
    "http://localhost/api/handicaps/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/handicaps/1"
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

<code class="language-json">{'success' =&gt; 'true',
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
