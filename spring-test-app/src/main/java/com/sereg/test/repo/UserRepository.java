package com.sereg.test.repo;

import java.util.List;

import org.springframework.data.repository.CrudRepository;

import com.sereg.test.model.UserModel;

public interface UserRepository extends CrudRepository<UserModel, Long> {
	List<UserModel> findByName(String name);
}
