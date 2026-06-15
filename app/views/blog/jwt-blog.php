<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | JWT Authentication</title>
    <meta name="description" content="Learn about JSON Web Tokens (JWT) and how they are used for authentication and authorization in modern web applications.">
    <meta name="author" content="AI TechKart">
    <meta name="copyright" content="AI TechKart">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/blog.css">
</head>

<body>
    <!-- Header Section -->
    <?php require_once __DIR__ . '/../header.php'; ?>
    <!-- Header Section -->

    <!-- Hero Section -->
    <section id="home" class="hero-section-blog-details">
        <div class="container hero-content">
            <h1>JWT (JSON Web Token) Authentication and Authorization</h1>
            <p>Learn exactly what JWTs are, how they work, and how to implement them securely in your applications.</p>
        </div>
    </section>
    <!-- Hero Section -->

    <section class="blog-section">

        <!-- Main Content Layout -->
        <div class="blog-detail-container">
            <!-- Blog Article -->
            <div class="main-content">
                <h2>What is JWT?</h2>
                <p>JWT (JSON Web Token) is a compact, URL-safe standard (RFC 7519) for securely transmitting information between parties as a JSON object. It is widely used for <strong>stateless authentication</strong> and <strong>session management</strong> in modern web applications, APIs, SPAs, and microservices.
                </p>

                <h2>How JWT Works for Sessions / Authentication</h2>
                <p>Instead of storing session data on the server (traditional sessions), the server issues a <strong>self-contained token</strong> after login. The client sends this token with every request. The server verifies the token's signature and trusts the claims inside it — no database lookup needed for basic validation.
                </p>

                <h2>Typical Flow</h2>
                <ul>
                    <li><strong>Login:</strong> User logs in with credentials.</li>
                    <li><strong>Token Issuance:</strong> Server validates credentials and issues a signed JWT.</li>
                    <li><strong>Client Storage:</strong> Client stores the JWT (usually in memory, httpOnly cookie, or carefully in localStorage).</li>
                    <li><strong>Authenticated Requests:</strong> Client includes the JWT in subsequent requests (usually Authorization: Bearer &lt;token&gt;).</li>
                    <li><strong>Server Validation:</strong> Server verifies signature + claims → grants access.</li>
                    <li><strong>Token Expiry:</strong> When the token expires, use a Refresh Token to get a new one.</li>
                </ul>

                <h2>JWT Structure</h2>
                <p>A JWT consists of three parts: Header, Payload, and Signature, separated by dots (.) and each part is <strong>Base64Url-encoded</strong>.</p>
                <div class="math-box">
                    JWT Structure:<br>
                    <code>eyJhbGciOiJI. TE2MjM5MDIyfQ. 6yJV_adQssw5c</code>
                </div>

                <p><strong>Header:</strong> Contains metadata about the token, such as the signing algorithm and token type.</p>
                <div class="math-box">
                    Header Example:<br>
                    <code>{"alg": "HS256", "typ": "JWT"}</code>
                </div>

                <p>Common algorithms: <strong>HS256</strong> (symmetric), <strong>RS256</strong>/<strong>ES256</strong> (asymmetric — recommended for most cases).</p>

                <p><strong>Payload:</strong> Contains the claims (data) you want to transmit. This can include user information, roles, permissions, and custom data.</p>
                <div class="math-box">
                    Payload Example:<br>
                    <code>{"sub": "1234567890", "name": "John Doe", "iat": 1516239022}</code>
                </div>

                <p><strong>Signature:</strong> Created by signing the header and payload with a secret key (HMAC) or a private key (RSA/ECDSA). This ensures the token's integrity and authenticity.</p>

                <h2>Benefits of JWT</h2>
                <ul>
                    <li><strong>Stateless & Scalable:</strong> No server-side session storage.</li>
                    <li><strong>Self-contained:</strong> All necessary info travels with the token.</li>
                    <li><strong>Cross-origin friendly:</strong> Works great with mobile apps and third-party domains.</li>
                    <li><strong>Performance:</strong> Fast verification.</li>
                    <li><strong>Standardized:</strong> Supported by most languages and frameworks.</li>
                </ul>

                <h2>Security Vulnerabilities & Best Practices</h2>
                <p>JWTs are powerful but easy to misconfigure. Here are the most critical points:</p>
                <ul>
                    <li>Use strong asymmetric algorithms (RS256, ES256) instead of HS256 in most production scenarios.</li>
                    <li>Always validate the algorithm on the server — never let the client dictate it (prevents "alg:none" and algorithm confusion attacks).</li>
                    <li>Short-lived access tokens (15 minutes or less) + long-lived refresh tokens.</li>
                    <li>Store tokens securely:Prefer httpOnly + Secure + SameSite=Strict/Lax cookies for refresh tokens.</li>
                    <li>Avoid localStorage for access tokens if possible (XSS risk).</li>
                </ul>

                <h2>Additional Security Measures:</h2>

                <ul>
                    <li>Validate all important claims: exp, iat, iss, aud, nbf, jti.</li>
                    <li>Use strong, rotated signing keys stored in secret managers (not in code).</li>
                    <li>Implement token revocation (blacklist with jti, or short expiry + refresh token rotation).</li>
                    <li>Always use HTTPS.</li>
                    <li>Minimal payload — only necessary claims.</li>
                    <li>Use established libraries (never implement from scratch): jsonwebtoken (Node), PyJWT, jjwt (Java), etc.</li>
                </ul>

            </div>

        </div>

    </section>

    <!-- Footer Section -->
    <?php require_once __DIR__ . '/../footer.php'; ?>
    <!-- Footer Section -->

</body>

</html>