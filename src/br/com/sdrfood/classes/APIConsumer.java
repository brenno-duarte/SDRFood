/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package br.com.sdrfood.classes;

import java.io.IOException;
import javax.swing.table.DefaultTableModel;
import org.apache.http.HttpEntity;
import org.apache.http.HttpResponse;
import org.apache.http.client.ClientProtocolException;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.impl.client.HttpClientBuilder;
import org.apache.http.util.EntityUtils;
import org.json.JSONObject;

/**
 *
 * @author brenno
 */
public class APIConsumer {
    public String url(String urlGet){
        HttpClient client = HttpClientBuilder.create().build();
        HttpGet get = new HttpGet(urlGet);       

        try {
            HttpResponse response = client.execute(get);
            HttpEntity entity = response.getEntity();

            String content = EntityUtils.toString(entity);
            return content;
        } catch (ClientProtocolException e) {
            e.printStackTrace();
        } catch (IOException e) {
            e.printStackTrace();
        } finally {
            get.releaseConnection();
        }
        return null;
    }
}
