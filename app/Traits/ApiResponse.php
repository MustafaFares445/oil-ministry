<?php

namespace App\Traits;


use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

trait ApiResponse
{
    public function successResponse(
        mixed $data = [],
        string $message = null,
        array $headers = []
    ): JsonResponse {
        return $this->jsonResponse(
            [
                'message' => $message,
                'data' => $data,
            ],
            Response::HTTP_OK,
            $headers
        );
    }

    public function createdResponse(
        mixed $data = [],
        string $message = null,
        array $headers = []
    ): JsonResponse {
        return $this->jsonResponse(
            [
                'message' => $message,
                'data' => $data,
            ],
            Response::HTTP_CREATED,
            $headers
        );
    }

    public function deletedResponse(
        string $message = null,
        array $headers = []
    ): JsonResponse {
        return $this->jsonResponse(
            [
                'message' => $message,
            ],
            Response::HTTP_NO_CONTENT,
            $headers
        );
    }

    public function failedResponse(
        string $message = null,
        array $headers = []
    ): JsonResponse {
        return $this->jsonResponse(
            ['message' => $message],
            Response::HTTP_BAD_REQUEST,
            $headers
        );
    }

    public function unprocessableResponse(
        mixed $errors = [],
        string $message = null,
        array $headers = []
    ): JsonResponse {
        return $this->jsonResponse(
            [
                'message' => $message,
                'errors' => $errors,
            ],
            Response::HTTP_UNPROCESSABLE_ENTITY,
            $headers
        );
    }

    public function notFoundResponse(
        string $message = null,
        array $headers = []
    ): JsonResponse {
        return $this->jsonResponse(
            ['message' => $message],
            Response::HTTP_NOT_FOUND,
            $headers
        );
    }

    public function unauthorizedResponse(
        string $message = null,
        array $headers = []
    ): JsonResponse {
        return $this->jsonResponse(
            ['message' => $message],
            Response::HTTP_UNAUTHORIZED,
            $headers
        );
    }

    public function forbiddenResponse(
        string $message = null,
        array $headers = []
    ): JsonResponse {
        return $this->jsonResponse(
            ['message' => $message],
            Response::HTTP_FORBIDDEN,
            $headers
        );
    }

    public function serverErrorResponse(
        string $message = null,
        array $headers = []
    ): JsonResponse {
        return $this->jsonResponse(
            ['message' => $message],
            Response::HTTP_INTERNAL_SERVER_ERROR,
            $headers
        );
    }

    private function jsonResponse(array $data, int $code = Response::HTTP_OK, $headers = []): JsonResponse
    {
        return response()->json($data, $code, $headers);
    }
}
