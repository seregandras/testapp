package com.sereg.test.repo;

import java.util.List;

import org.springframework.data.repository.CrudRepository;

import com.sereg.test.model.AdvertisementModel;

public interface AdvertisementRepository extends CrudRepository<AdvertisementModel, Long> {
	List<AdvertisementModel> findByTitle(String title);
}
