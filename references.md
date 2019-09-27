# when to use vuex ? 

When you find yourself adding / like passing  down a lot of props to nested components and bubbling up events all the way back up to a single component, that is coordinating between all these sibling components 



$ pa route:list options

Options:
      --columns[=COLUMNS]  Columns to include in the route table (multiple values allowed)

  -c, --compact            Only show method, URI and action columns
      --json               Output the route list as JSON
      --method[=METHOD]    Filter the routes by method
      --name[=NAME]        Filter the routes by name
      --path[=PATH]        Filter the routes by path
  -r, --reverse            Reverse the ordering of the routes
      --sort[=SORT]        The column (domain, method, uri, name, action, middleware) to sort by [default: "uri"]
  -h, --help               Display this help message
  -q, --quiet              Do not output any message
  -V, --version            Display this application version
      --ansi               Force ANSI output
      --no-ansi            Disable ANSI output
  -n, --no-interaction     Do not ask any interactive question
      --env[=ENV]          The environment the command should run under
  -v|vv|vvv, --verbose     Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug


Named slots 

```
<blog-post :author="author">
<h2 slot="header">Blog post title</h2>

<p>Blog post content</p>

<p>More blog post content</p>

</blog-post>
```