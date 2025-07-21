/**
     * @OA\Post(
     * path="/api/products/decrypt")
     * operationId="decryptProductResponse",
     * tags={"Product"},
     * simmary="Decrypt product response",
     * description="Decrypts the encrypted product response data",
     * security={{"ApiKeyAuth": {}}},
     * OA\RequestBody(
     *      required=true,
     *      @OA\JsonContent(
     *          required={"data"},
     *          @OA\Property(property="data", type="string", example="Encrypted data here")
     *      )
     * ),
     * OA\Response(
     *      response=200,
     *      description="Decrypted data successfully",
     *      @OA\JsonContent(
     *          type="object",
     *          @OA\Property(property="message", type="string", example="success"),
     *          @OA\Property(
     *              property="data",
     *              type="array",
     *              @OA\Items(ref="#/components/schemas/Product")
     *          ) 
     *      )
     * ),
     * OA\Response(
     *      response=400,
     *      description="Decrypt Response failed",
     * )
     */
    public function decryptResponse(Request $request)
    {
        $encryptedData = $request->input('data');
        try{
            $decrypt = Encryption::decrypt($encryptedData);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Decryption failed: ' . $e->getMessage()
            ], 400);
        }
        
        return response()->json(['decrypted_data' => $decryptedData]);
    }