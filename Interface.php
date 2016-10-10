<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_FWSInventory
 *  @copyright   Copyright 2008 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2009-07-31
 */
/******************************************************************************* 
 *    __  _    _  ___ 
 *   (  )( \/\/ )/ __)
 *   /__\ \    / \__ \
 *  (_)(_) \/\/  (___/
 * 
 *  Amazon FWS Inventory PHP5 Library
 *  Generated: Fri Nov 20 09:59:57 PST 2009
 * 
 */
/**
 * Amazon Web Service used to retrieve inventory and fulfillability data
 * based on merchant-owned inventory in Amazon's fulfillment network.
 * 
 */

interface  Amazon_FWSInventory_Interface 
{
    

            
    /**
     * Get Service Status 
     * Gets a brief status message from the service.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetServiceStatus.html      
     * @param mixed $request array of parameters for Amazon_FWSInventory_Model_GetServiceStatusRequest request
     * or Amazon_FWSInventory_Model_GetServiceStatusRequest object itself
     * @see Amazon_FWSInventory_Model_GetServiceStatusRequest
     * @return Amazon_FWSInventory_Model_GetServiceStatusResponse Amazon_FWSInventory_Model_GetServiceStatusResponse
     *
     * @throws Amazon_FWSInventory_Exception
     */
    public function getServiceStatus($request);


            
    /**
     * Get Inventory Supply 
     * Get information about the supply of merchant-owned inventory in
     * Amazon's fulfillment network. "Supply" is inventory that is available
     * for fulfilling (a.k.a. Multi-Channel Fulfillment) orders. In general
     * this includes all sellable inventory that has been received by Amazon,
     * that is not reserved for existing orders or for internal FC processes,
     * and also inventory expected to be received from inbound shipments.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetInventorySupply.html      
     * @param mixed $request array of parameters for Amazon_FWSInventory_Model_GetInventorySupplyRequest request
     * or Amazon_FWSInventory_Model_GetInventorySupplyRequest object itself
     * @see Amazon_FWSInventory_Model_GetInventorySupplyRequest
     * @return Amazon_FWSInventory_Model_GetInventorySupplyResponse Amazon_FWSInventory_Model_GetInventorySupplyResponse
     *
     * @throws Amazon_FWSInventory_Exception
     */
    public function getInventorySupply($request);


            
    /**
     * List Updated Inventory Supply 
     * Get information about the supply of merchant-owned inventory in
     * Amazon's fulfillment network, for inventory items that may have had
     * recent changes in inventory levels. The type of inventory data returned
     * by this operation is the same as that returned by GetInventorySupply.
     * This operation provides the most efficient mechanism for clients to
     * maintain local copies of inventory supply data.
     * 
     * This operation is used with ListUpdatedInventorySupplyByNextToken
     * to paginate over the resultset. Begin pagination by invoking the
     * ListUpdatedInventorySupply operation, and retrieve the first set of
     * results. If the HasNext flag indicates more results are available,
     * continuing iteratively requesting further pages results by invoking the
     * ListUpdatedInventorySupplyByNextToken operation (each time passing in the
     * NextToken value from the previous result), until the returned HasNext
     * flag is false, indicating no further results are available.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}ListUpdatedInventorySupply.html      
     * @param mixed $request array of parameters for Amazon_FWSInventory_Model_ListUpdatedInventorySupplyRequest request
     * or Amazon_FWSInventory_Model_ListUpdatedInventorySupplyRequest object itself
     * @see Amazon_FWSInventory_Model_ListUpdatedInventorySupplyRequest
     * @return Amazon_FWSInventory_Model_ListUpdatedInventorySupplyResponse Amazon_FWSInventory_Model_ListUpdatedInventorySupplyResponse
     *
     * @throws Amazon_FWSInventory_Exception
     */
    public function listUpdatedInventorySupply($request);


            
    /**
     * List Updated Inventory Supply By Next Token 
     * Continues pagination over a resultset of inventory data for inventory
     * items that may have had recent changes in inventory levels.
     * 
     * This operation is used in conjunction with ListUpdatedInventorySupply.
     * Please refer to documentation for that operation for further details.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}ListUpdatedInventorySupplyByNextToken.html      
     * @param mixed $request array of parameters for Amazon_FWSInventory_Model_ListUpdatedInventorySupplyByNextTokenRequest request
     * or Amazon_FWSInventory_Model_ListUpdatedInventorySupplyByNextTokenRequest object itself
     * @see Amazon_FWSInventory_Model_ListUpdatedInventorySupplyByNextTokenRequest
     * @return Amazon_FWSInventory_Model_ListUpdatedInventorySupplyByNextTokenResponse Amazon_FWSInventory_Model_ListUpdatedInventorySupplyByNextTokenResponse
     *
     * @throws Amazon_FWSInventory_Exception
     */
    public function listUpdatedInventorySupplyByNextToken($request);

}