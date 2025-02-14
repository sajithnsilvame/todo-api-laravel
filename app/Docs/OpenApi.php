<?php

namespace App\Docs;

/**
 * @OA\Info(
 *     title=L5_SWAGGER_CONST_APP_NAME,
 *     version="1.0",
 *     description=L5_SWAGGER_CONST_APP_DESCRIPTION
 * )
 * 
 * @OA\Server(
 *     url=L5_SWAGGER_CONST_HOST,
 *     description="API Server"
 * )
 * 
 * @OA\SecurityScheme(
 *     securityScheme="bearerAuth",
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="JWT",
 *     description="Enter your Bearer token in the format **'Bearer {token}'**"
 * )
 */
class OpenApi {}
